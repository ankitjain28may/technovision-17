<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use App\Patient;
use App\DoctorProfile;
use App\PatientProfile;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = new Doctor;
        $doctor->name = "Anil Agarwal";
        $doctor->email = "anil@gmail.com";
        $doctor->password = Hash::make('123456');
        if ($doctor->save()) {
            $doctorProfile = new DoctorProfile;
            $doctorProfile->qualification = 'M. D';
            $doctorProfile->speciality = 'cardiologist';
            $doctorProfile->gender = 'M';
            $doctorProfile->contact = "1239874560";
            $doctorProfile->doctorId = $doctor->id;
            $doctorProfile->experience = 5;
            $doctorProfile->address = "South West, Delhi";
            $doctorProfile->city = "Delhi";
            $doctorProfile->fees = "300";
            $doctorProfile->save();
        }

        $patient = new Patient;
        $patient->name = "Rajesh Kumar";
        $patient->email = "rajesh@gmail.com";
        $patient->password = Hash::make('123456');
        if ($patient->save()) {
            $patientProfile = new PatientProfile;
            $patientProfile->age = "23";
            $patientProfile->gender = "M";
            $patientProfile->contact = "7894562340";
            $patientProfile->patientId = $patient->id;
            $patientProfile->disease = "";
            $patientProfile->symptoms = "Chest Discomfort,  Nausea, Indigestion, Heartburn, or Stomach Pain";
            $patientProfile->city = "Kaswa Village";
            $patientProfile->save();

        }

    }
}
