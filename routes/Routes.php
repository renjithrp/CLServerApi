<?php

//userRoutes//
$app->get('/login','UserLogin');
$app->get('/logout','UserLogout');
$app->post('/signup','UserSignup');


#ProfileRoutes
$app->get('/profile', 'GetProfile');
$app->put('/profile', 'UpdateProfile');
$app->post('/profile', 'CreateProfile');


//Testimonials

$app->get('/testimonials', 'GetTestimonials');
$app->get('/testimonials/{pro_id}', 'GetProfleTestimonial');
$app->post('/testimonials/{pro_id}', 'CreateProfileTestimonial');
$app->put('/testimonials/{pro_id}/{id}', 'UpdateProfileTestimonial');

//Rating
$app->get('/rating','GetRating');
$app->get('/rating/{pro_id}', 'GetUserRating');
$app->post('/rating/{pro_id}', 'PostRating');

//section Routes//
$app->get('/sections', 'GetSections');
$app->get('/sections/{sec_id}', 'GetSubjects');
$app->get('/sections/{sec_id}/subjects', 'GetSubjects');
$app->get('/sections/{sec_id}/subjects/{subj_id}', 'GetNotesAndExams');
$app->get('/sections/{sec_id}/subjects/{subj_id}/notes', 'GetAllNotes');
$app->get('/sections/{sec_id}/subjects/{subj_id}/exams', 'GetAllExams');
$app->get('/sections/{sec_id}/subjects/{subj_id}/notes/{note_id}', 'GetNote');
$app->get('/sections/{sec_id}/subjects/{subj_id}/exams/{exam_id}', 'GetExam');

//Role
$app->get('/role', 'GetRole');