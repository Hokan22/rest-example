<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCandidateIndex()
    {
        $this->get('/api/candidate');

        $this->seeJson();
    }

    public function testCandidateCreation()
    {
        $this->json('POST', '/api/candidate',
            [
                'vorname' => 'Test1',
                'nachname' => 'Test2',
                'firma' => 'Test3',
                'aktuelle_position' => 'Test4',
            ])
            ->seeJson([
                'vorname' => 'Test1',
                'nachname' => 'Test2',
                'firma' => 'Test3',
                'aktuelle_position' => 'Test4',
            ])
            ->seeInDatabase('candidates', [
                'vorname' => 'Test1',
                'nachname' => 'Test2',
                'firma' => 'Test3',
                'aktuelle_position' => 'Test4',
            ]);
    }

    public function testCandidateFind()
    {
        $Candidate = \App\Candidate::all()->random();

        $this->json('POST', '/api/candidate/find',
            [
                'vorname' => $Candidate->vorname,
                'nachname' => $Candidate->nachname,
            ])
            ->seeJson([
                'vorname' => $Candidate->vorname,
                'nachname' => $Candidate->nachname,
                'firma' => $Candidate->firma,
                'aktuelle_position' => $Candidate->aktuelle_position,
            ]);
    }

    public function testWrongCandidateCreation()
    {
        $this->json('POST', '/api/candidate',
            [
                'invalid' => 'Test1',
            ])
            ->seeStatusCode(500);
    }


    public function testGetCandidate()
    {
        $Candidate = \App\Candidate::all()->random();

        $this->get('/api/candidate/'.$Candidate->id)
            ->seeJson([
                'vorname' => $Candidate->vorname,
                'nachname' => $Candidate->nachname,
                'firma' => $Candidate->firma,
                'aktuelle_position' => $Candidate->aktuelle_position,
            ]);
    }

    public function testWrongGetCandidate()
    {
        $this->get('/api/candidate/9999999')
            ->seeStatusCode(404);
    }

    public function testCandidateUpdate()
    {
        $Candidate = \App\Candidate::all()->random();

        $this->json('PUT', '/api/candidate/'.$Candidate->id,
            [
                'vorname' => 'Test5',
                'nachname' => 'Test6',
                'firma' => 'Test7',
                'aktuelle_position' => 'Test8',
            ])
            ->seeJson([
                'vorname' => 'Test5',
                'nachname' => 'Test6',
                'firma' => 'Test7',
                'aktuelle_position' => 'Test8',
            ])
            ->seeInDatabase('candidates', [
                'vorname' => 'Test5',
                'nachname' => 'Test6',
                'firma' => 'Test7',
                'aktuelle_position' => 'Test8',
            ]);
    }

    public function testCandidateDelete()
    {
        $Candidate = \App\Candidate::all()->random();

        $this->delete('/api/candidate/'.$Candidate->id)
            ->seeJson([
                'deleted'
            ])
            ->missingFromDatabase('candidates', [
            'vorname' => $Candidate->vorname,
            'nachname' => $Candidate->nachname,
            'firma' => $Candidate->firma,
            'aktuelle_position' => $Candidate->aktuelle_position,
        ]);
    }
}
