<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FacultyRegistrationController;
use App\Http\Controllers\FacultyAssignController;
use App\Http\Controllers\CommitteeAssignController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookChapterController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AchivementController;
use App\Http\Controllers\PlacementProgressionController;
use App\Http\Controllers\UpSeminarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrnontendController;
use App\Http\Controllers\FacultyQualificationController;
use App\Http\Controllers\FacultyExperienceController;
use App\Http\Controllers\GalleryAlbumController;


Route::prefix('vtadmin')->group(function () {
    
    // Public routes (NO login required)
    Route::get('/', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'AddLogin']);
    Route::get('/register', [AdminController::class, 'register']);
    Route::post('/AddRegister', [AdminController::class, 'AddRegister']);
    
    // Protected routes (LOGIN REQUIRED)
    Route::middleware('auth:admin')->group(function () {
        
        // User
        Route::get('/list-user', [AdminController::class, 'list_user']);
        Route::get('/add-user', [AdminController::class, 'add_user']);
        Route::post('/AddUser', [AdminController::class, 'AddUser']);
        Route::get('/edit-user/{id}', [AdminController::class, 'edit_user']);
        Route::post('/editUser/{id}', [AdminController::class, 'editUser']);
        Route::get('/deleteUser/{id}', [AdminController::class,'deleteUser']);
        Route::post('/UserStatusChanger/{id}', [AdminController::class,'UserStatusChanger']);
        
        Route::get('/dashboard', [AdminController::class, 'dashboard']);

        Route::get('/edit-profile/{id}', [AdminController::class, 'edit_profile']);
        Route::post('/editProfile/{id}', [AdminController::class, 'editProfile']);
        
        Route::get('/change-password', [AdminController::class, 'change_password']);
        Route::post('/changePassword', [AdminController::class, 'changePassword']);

        Route::get('/log-out', [AdminController::class, 'logout']);

        // Subject routes
        Route::get('/list-subject', [SubjectController::class,'list_subject']);
        Route::get('/add-subject', [SubjectController::class,'add_subject']);
        Route::post('/addSubject', [SubjectController::class,'addSubject']);
        Route::get('/edit-subject/{id}', [SubjectController::class,'edit_subject']);
        Route::post('/editSubject/{id}', [SubjectController::class,'editSubject']);
        Route::get('/deleteSubject/{id}', [SubjectController::class,'deleteSubject']);
        Route::post('/SubjectStatusChanger/{id}', [SubjectController::class,'SubjectStatusChanger']);

        // Committee
        Route::get('/list-committee', [CommitteeController::class,'list_committee']);
        Route::get('/add-committee', [CommitteeController::class,'add_committee']);
        Route::post('/addCommittee', [CommitteeController::class,'addCommittee']);
        Route::get('/edit-committee/{id}', [CommitteeController::class,'edit_committee']);
        Route::post('/editCommittee/{id}', [CommitteeController::class,'editCommittee']);
        Route::get('/deleteCommittee/{id}', [CommitteeController::class,'deleteCommittee']);
        Route::post('/CommitteeStatusChanger/{id}', [CommitteeController::class, 'CommitteeStatusChanger']);

        // Faculty
        Route::get('/list-faculty', [FacultyController::class,'list_faculty']);
        Route::get('/add-faculty', [FacultyController::class,'add_faculty']);
        Route::post('/addFaculty', [FacultyController::class,'addFaculty']);
        Route::get('/edit-faculty/{id}', [FacultyController::class,'edit_faculty']);
        Route::post('/editFaculty/{id}', [FacultyController::class,'editFaculty']);
        Route::get('/deleteFaculty/{id}', [FacultyController::class,'deleteFaculty']);
        Route::post('/FacultyStatusChanger/{id}', [FacultyController::class, 'FacultyStatusChanger']);

        // Notice
        Route::get('/list-notice', [NoticeController::class,'list_notice']);
        Route::get('/add-notice', [NoticeController::class,'add_notice']);
        Route::post('/addNotice', [NoticeController::class,'addNotice']);
        Route::get('/edit-notice/{id}', [NoticeController::class,'edit_notice']);
        Route::post('/editNotice/{id}', [NoticeController::class,'editNotice']);
        Route::get('/deleteNotice/{id}', [NoticeController::class,'deleteNotice']);
        Route::post('/Noticestatuschanger/{id}', [NoticeController::class,'Noticestatuschanger']);

        // Routine
        Route::get('/list-routine', [RoutineController::class,'list_routine']);
        Route::get('/add-routine', [RoutineController::class,'add_routine']);
        Route::post('/addRoutine', [RoutineController::class,'addRoutine']);
        Route::get('/edit-routine/{id}', [RoutineController::class,'edit_routine']);
        Route::post('/editRoutine/{id}', [RoutineController::class,'editRoutine']);
        Route::get('/deleteRoutine/{id}', [RoutineController::class,'deleteRoutine']);
        Route::post('/RoutineStatusChanger/{id}', [RoutineController::class,'RoutineStatusChanger']);

        // Syllabus
        Route::get('/list-syllabus', [SyllabusController::class,'list_syllabus']);
        Route::get('/add-syllabus', [SyllabusController::class,'add_syllabus']);
        Route::post('/addSyllabus', [SyllabusController::class,'addSyllabus']);
        Route::get('/edit-syllabus/{id}', [SyllabusController::class,'edit_syllabus']);
        Route::post('/editSyllabus/{id}', [SyllabusController::class,'editSyllabus']);
        Route::get('/deleteSyllabus/{id}', [SyllabusController::class,'deleteSyllabus']);
        Route::post('/SyllabusStatusChanger/{id}', [SyllabusController::class,'SyllabusStatusChanger']);

        // Lesson
        Route::get('/list-lesson', [LessonController::class,'list_lesson']);
        Route::get('/add-lesson', [LessonController::class,'add_lesson']);
        Route::post('/addLesson', [LessonController::class,'addLesson']);
        Route::get('/edit-lesson/{id}', [LessonController::class,'edit_lesson']);
        Route::post('/editLesson/{id}', [LessonController::class,'editLesson']);
        Route::get('/deleteLesson/{id}', [LessonController::class,'deleteLesson']);
        Route::post('/LessonStatusChanger/{id}', [LessonController::class,'LessonStatusChanger']);  

        // Dwonload
        Route::get('/list-download', [DownloadController::class,'list_download']);
        Route::get('/add-download', [DownloadController::class,'add_download']);
        Route::post('/addDownload', [DownloadController::class,'addDownload']);
        Route::get('/edit-download/{id}', [DownloadController::class,'edit_download']);
        Route::post('/editDownload/{id}', [DownloadController::class,'editDownload']);
        Route::get('/deleteDownload/{id}', [DownloadController::class,'deleteDownload']);
        Route::post('/DownloadStatusChanger/{id}', [DownloadController::class,'DownloadStatusChanger']); 
        
        // Events
        Route::get('/list-events', [EventsController::class,'list_events']);
        Route::get('/add-events', [EventsController::class,'add_events']);
        Route::post('/addEvents', [EventsController::class,'addEvents']);
        Route::get('/edit-events/{id}', [EventsController::class,'edit_events']);
        Route::post('/editEvents/{id}', [EventsController::class,'editEvents']);
        Route::get('/deleteEvents/{id}', [EventsController::class,'deleteEvents']);
        Route::post('/EventsStatusChanger/{id}', [EventsController::class,'EventsStatusChanger']); 

        // Faculty Registration
        Route::get('/list-faculty-registration', [FacultyRegistrationController::class,'list_faculty_registration']);
        Route::get('/add-faculty-registration', [FacultyRegistrationController::class,'add_faculty_registration']);
        Route::post('/addFacultyRegistration', [FacultyRegistrationController::class,'addFacultyRegistration']);
        Route::get('/edit-faculty-registration/{id}', [FacultyRegistrationController::class,'edit_faculty_registration']);
        Route::post('/editFacultyRegistration/{id}', [FacultyRegistrationController::class,'editFacultyRegistration']);
        Route::get('/deleteFacultyRegistration/{id}', [FacultyRegistrationController::class,'deleteFacultyRegistration']);
        Route::post('/facultyRegistrationStatusChanger/{id}', [FacultyRegistrationController::class,'facultyRegistrationStatusChanger']);
        
        // Faculty Qualification
        Route::get('/list-faculty-qualification', [FacultyQualificationController::class,'list_faculty_qualification']);
        Route::get('/add-faculty-qualification', [FacultyQualificationController::class,'add_faculty_qualification']);
        Route::post('/addFacultyQualification', [FacultyQualificationController::class,'addFacultyQualification']);
        Route::get('/edit-faculty-qualification/{id}', [FacultyQualificationController::class,'edit_faculty_qualification']);
        Route::post('/editFacultyQualification/{id}', [FacultyQualificationController::class,'editFacultyQualification']);
        Route::get('/deleteFacultyQualification/{id}', [FacultyQualificationController::class,'deleteFacultyQualification']);
        Route::post('/facultyQualificationStatusChanger/{id}', [FacultyQualificationController::class,'facultyQualificationStatusChanger']);

        // Faculty Experience
        Route::get('/list-faculty-experience', [FacultyExperienceController::class,'list_faculty_experience']);
        Route::get('/add-faculty-experience', [FacultyExperienceController::class,'add_faculty_experience']);
        Route::post('/addFacultyExperience', [FacultyExperienceController::class,'addFacultyExperience']);
        Route::get('/edit-faculty-experience/{id}', [FacultyExperienceController::class,'edit_faculty_experience']);
        Route::post('/editFacultyExperience/{id}', [FacultyExperienceController::class,'editFacultyExperience']);
        Route::get('/deleteFacultyExperience/{id}', [FacultyExperienceController::class,'deleteFacultyExperience']);
        Route::post('/facultyExperienceStatusChanger/{id}', [FacultyExperienceController::class,'facultyExperienceStatusChanger']);

        // Faculty Assign
        Route::get('/list-faculty-assign', [FacultyAssignController::class,'list_faculty_assign']);
        Route::get('/add-faculty-assign', [FacultyAssignController::class,'add_faculty_assign']);
        Route::post('/addFacultyAssign', [FacultyAssignController::class,'addFacultyAssign']);
        Route::get('/edit-faculty-assign/{id}', [FacultyAssignController::class,'edit_faculty_assign']);
        Route::post('/editFacultyAssign/{id}', [FacultyAssignController::class,'editFacultyAssign']);
        Route::get('/deleteFacultyAssign/{id}', [FacultyAssignController::class,'deleteFacultyAssign']);
        Route::post('/FacultyAssignStatusChanger/{id}', [FacultyAssignController::class,'FacultyAssignStatusChanger']); 

        // Committee Assign
        Route::get('/list-committee-assign', [CommitteeAssignController::class,'list_committee_assign']);
        Route::get('/add-committee-assign', [CommitteeAssignController::class,'add_committee_assign']);
        Route::post('/addCommitteeAssign', [CommitteeAssignController::class,'addCommitteeAssign']);
        Route::get('/edit-committee-assign/{id}', [CommitteeAssignController::class,'edit_committee_assign']);
        Route::post('/editCommitteeAssign/{id}', [CommitteeAssignController::class,'editCommitteeAssign']);
        Route::get('/deleteCommitteeAssign/{id}', [CommitteeAssignController::class,'deleteCommitteeAssign']);
        Route::post('/CommitteeAssignStatusChanger/{id}', [CommitteeAssignController::class,'CommitteeAssignStatusChanger']); 

        // Publications
        Route::get('/list-publications', [PublicationsController::class,'list_publications']);
        Route::get('/add-publications', [PublicationsController::class,'add_publications']);
        Route::post('/addPublications', [PublicationsController::class,'addPublications']);
        Route::get('/edit-publications/{id}', [PublicationsController::class,'edit_publications']);
        Route::post('/editPublications/{id}', [PublicationsController::class,'editPublications']);
        Route::get('/deletePublications/{id}', [PublicationsController::class,'deletePublications']);
        Route::post('/PublicationsStatusChanger/{id}', [PublicationsController::class,'PublicationsStatusChanger']); 

        // Book
        Route::get('/list-book', [BookController::class,'list_book']);
        Route::get('/add-book', [BookController::class,'add_book']);
        Route::post('/addBook', [BookController::class,'addBook']);
        Route::get('/edit-book/{id}', [BookController::class,'edit_book']);
        Route::post('/editBook/{id}', [BookController::class,'editBook']);
        Route::get('/deleteBook/{id}', [BookController::class,'deleteBook']);
        Route::post('/BookStatusChanger/{id}', [BookController::class,'BookStatusChanger']); 

        // Book Chapter
        Route::get('/list-chapter', [BookChapterController::class,'list_chapter']);
        Route::get('/add-chapter', [BookChapterController::class,'add_chapter']);
        Route::post('/addChapter', [BookChapterController::class,'addChapter']);
        Route::get('/edit-chapter/{id}', [BookChapterController::class,'edit_chapter']);
        Route::post('/editChapter/{id}', [BookChapterController::class,'editChapter']);
        Route::get('/deleteChapter/{id}', [BookChapterController::class,'deleteChapter']);
        Route::post('/ChapterStatusChanger/{id}', [BookChapterController::class,'ChapterStatusChanger']); 

        // Seminar
        Route::get('/list-seminar', [SeminarController::class,'list_seminar']);
        Route::get('/add-seminar', [SeminarController::class,'add_seminar']);
        Route::post('/addSeminar', [SeminarController::class,'addSeminar']);
        Route::get('/edit-seminar/{id}', [SeminarController::class,'edit_seminar']);
        Route::post('/editSeminar/{id}', [SeminarController::class,'editSeminar']);
        Route::get('/deleteSeminar/{id}', [SeminarController::class,'deleteSeminar']);
        Route::post('/SeminarStatusChanger/{id}', [SeminarController::class,'SeminarStatusChanger']); 

        // Gallery
        Route::get('/list-gallery', [GalleryController::class,'list_gallery']);
        Route::get('/add-gallery', [GalleryController::class,'add_gallery']);
        Route::post('/addGallery', [GalleryController::class,'addGallery']);
        Route::get('/edit-gallery/{id}', [GalleryController::class,'edit_gallery']);
        Route::post('/editGallery/{id}', [GalleryController::class,'editGallery']);
        Route::get('/deleteGallery/{id}', [GalleryController::class,'deleteGallery']);
        Route::post('/GalleryStatusChanger/{id}', [GalleryController::class,'GalleryStatusChanger']); 
        
        // Placement & Progression
        Route::get('/list-placementProgression',[PlacementProgressionController::class, 'list_placementProgression']);
        Route::get('/add-placementProgression',[PlacementProgressionController::class, 'add_placementProgression']);
        Route::post('/addPlacementProgression', [PlacementProgressionController::class,'addPlacementProgression']);
        Route::get('/edit-placementProgression/{id}', [PlacementProgressionController::class,'edit_placementProgression']);
        Route::post('/editPlacementProgression/{id}', [PlacementProgressionController::class,'editPlacementProgression']);
        Route::get('/deletePlacementProgression/{id}', [PlacementProgressionController::class,'deletePlacementProgression']);
        Route::post('/PlacementProgressionStatusChange/{id}', [PlacementProgressionController::class,'PlacementProgressionStatusChange']);
    
        // Achivement scholarship
        Route::get('/list-achivement',[AchivementController::class, 'list_achivement']);
        Route::get('/add-achivement',[AchivementController::class, 'add_achivement']);
        Route::post('/addAchivement',[AchivementController::class, 'addAchivement']);
        Route::get('/edit-achivement/{id}', [AchivementController::class,'edit_achivement']);
        Route::post('/editAchivement/{id}', [AchivementController::class,'editAchivement']);
        Route::get('/deleteAchivement/{id}', [AchivementController::class,'deleteAchivement']);
        Route::post('/achivementStatusChange/{id}', [AchivementController::class,'achivementStatusChange']);
        
        // Result
        Route::get('/list-result', [ResultController::class,'list_result']);
        Route::get('/add-result', [ResultController::class,'add_result']);
        Route::post('/addResult', [ResultController::class,'addResult']);
        Route::get('/edit-result/{id}', [ResultController::class,'edit_result']);
        Route::post('/editResult/{id}', [ResultController::class,'editResult']);
        Route::get('/deleteResult/{id}', [ResultController::class,'deleteResult']);
        Route::post('/ResultStatusChanger/{id}', [ResultController::class, 'ResultStatusChanger']);
        
         // Upload Seminar 
        Route::get('/list-upseminar',[UpSeminarController::class, 'list_upseminar']);
        Route::get('/add-upseminar', [UpSeminarController::class,'add_upseminar']);
        Route::post('/addUpSeminar', [UpSeminarController::class,'addUpSeminar']);
        Route::get('/edit-upseminar/{id}', [UpSeminarController::class,'edit_upseminar']);
        Route::post('/editUpSeminar/{id}', [UpSeminarController::class,'editUpSeminar']);
        Route::get('/deleteUpSeminar/{id}', [UpSeminarController::class,'deleteUpSeminar']);
        Route::post('/UpSeminarstatuschanger/{id}', [UpSeminarController::class,'UpSeminarstatuschanger']);

        // Category
        Route::get('/list-category', [CategoryController::class,'list_category']);
        Route::get('/add-category', [CategoryController::class,'add_category']);
        Route::post('/addCategory', [CategoryController::class,'addCategory']);
        Route::get('/edit-category/{id}', [CategoryController::class,'edit_category']);
        Route::post('/editCategory/{id}', [CategoryController::class,'editCategory']);
        Route::get('/deleteCategory/{id}', [CategoryController::class,'deleteCategory']);
        Route::post('/CategoryStatusChanger/{id}', [CategoryController::class,'CategoryStatusChanger']); 

        // GalleryAlbum
        Route::get('/list-galleryAlbum', [GalleryAlbumController::class,'list_galleryAlbum']);
        Route::get('/add-galleryAlbum', [GalleryAlbumController::class,'add_galleryAlbum']);
        Route::post('/addGalleryAlbum', [GalleryAlbumController::class,'addGalleryAlbum']);
        Route::get('/edit-galleryAlbum/{id}', [GalleryAlbumController::class,'edit_galleryAlbum']);
        Route::post('/editGalleryAlbum/{id}', [GalleryAlbumController::class,'editGalleryAlbum']);
        Route::get('/deleteGalleryAlbum/{id}', [GalleryAlbumController::class,'deleteGalleryAlbum']);
        Route::post('/GalleryAlbumStatusChanger/{id}', [GalleryAlbumController::class,'GalleryAlbumStatusChanger']); 
        
        
    });
});
    Route::post('/get-subject-by-faculty', [FacultyAssignController::class, 'getSubjectByFaculty']);

Route::controller(FrnontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/department/{id}.aspx', 'department');
    Route::get('/FacultyProfile/{id}', 'FacultyProfile');
    Route::get('/PhotoImages/{id}', 'PhotoImages');

});

// website routes
Route::get('/', function () { return view('front.pages.index'); });
Route::get('/About-khudiram-bose.aspx', function () { return view('front.pages.AboutKhudiramBose'); })->name('about-khudiram-bose');
Route::get('/About-college.aspx', function () { return view('front.pages.about-college'); })->name('about-college');
Route::get('/Bengali.aspx', function () { return view('front.pages.bengali'); })->name('bengali');
Route::get('/Principal-message.aspx', function(){ return view('front.pages.principal-message');})->name('principal-message');
Route::get('/Governing-body.aspx', function () { return view('front.pages.governing-body'); })->name('governing-body');
Route::get('/Principals.aspx', function () { return view('front.pages.principals-list'); })->name('principals-list');
Route::get('/Presidents.aspx', function () { return view('front.pages.presidents-list'); })->name('presidents-list');
Route::get('/Mission-vision.aspx', function () { return view('front.pages.mission-vision'); })->name('mission-vision');
Route::get('/Annual-report.aspx', function () { return view('front.pages.annual-report'); })->name('annual-report');
Route::get('/College-calender.aspx', function () { return view('front.pages.college-calender'); })->name('college-calender');
Route::get('/Academi-council.aspx', function () { return view('front.pages.academi-council'); })->name('academi-council');
Route::get('/Finance-committee.aspx', function () { return view('front.pages.finance-committee'); })->name('finance-committee');
Route::get('/Examination-cell.aspx', function () { return view('front.pages.examination-cell'); })->name('examination-cell');
Route::get('/711_GenderEquity.aspx', function () { return view('front.pages.711_gender-equity'); })->name('711-gender-equity');
Route::get('/713_WasteManagement.aspx', function () { return view('front.pages.713-waste-management'); })->name('713-waste-management');
Route::get('/board-of-studies.aspx', function () { return view('front.pages.board-of-studies'); })->name('board-of-studies');
Route::get('/other-committes.aspx', function () { return view('front.pages.other-committes'); })->name('other-committes');
Route::get('/Education.aspx', function () { return view('front.pages.education'); })->name('education');
Route::get('/UGCoursesOffered.aspx', function () { return view('front.pages.ugcoursesoffered'); })->name('ugcoursesoffered');
Route::get('/UGCourseStructureNep.aspx', function () { return view('front.pages.pg-courses-offered'); })->name('pg-courses-offered');
Route::get('/Master-routine.aspx', function () { return view('front.pages.master-routine'); })->name('master-routine');
Route::get('/ug-course-structure.aspx', function () { return view('front.pages.ug-course-structure'); })->name('ug-course-structure');
Route::get('/ug-course-structure-nep.aspx', function () { return view('front.pages.ug-course-structure-nep'); })->name('ug-course-structure-nep');
Route::get('/Routine.aspx', function () { return view('front.pages.routine'); })->name('routine');
Route::get('/AcademicCalendar.aspx', function () { return view('front.pages.academic-calendar'); })->name('academic-calendar');
Route::get('/Syllabus.aspx', function () { return view('front.pages.ug-syllabus'); })->name('ug-syllabus');
Route::get('/Syllabus-pg.aspx', function () { return view('front.pages.pg-syllabus'); })->name('pg-syllabus');
Route::get('/Controller-section.aspx', function () { return view('front.pages.controller-section'); })->name('controller-section');
Route::get('/AllNotifications.aspx', function () { return view('front.pages.all-notifications'); })->name('all-notifications');
Route::get('/GovtAudit.aspx', function () { return view('front.pages.government-audit-report'); })->name('government-audit-report');
Route::get('/InternalAudit.aspx', function () { return view('front.pages.internal-audit'); })->name('internal-audit');
Route::get('/TeachingStaff.aspx', function () { return view('front.pages.teaching-staff'); })->name('teaching-staff');
Route::get('/NonTeachingStaff.aspx', function () { return view('front.pages.non-teaching-staff'); })->name('non-teaching-staff');
Route::get('/Teachers-council.aspx', function () { return view('front.pages.teachers-council'); })->name('teachers-council');
Route::get('/NSS.aspx', function () { return view('front.pages.nss'); })->name('nss');
Route::get('/CulturalSportsActivities.aspx', function () { return view('front.pages.cultural-sports-activities'); })->name('cultural-sports-activities');
Route::get('/AntiRagging.aspx', function () { return view('front.pages.anti-ragging-committee'); })->name('anti-ragging-committee');
Route::get('/AntiRaggingSquad.aspx', function () { return view('front.pages.anti-ragging-squad'); })->name('anti-ragging-squad');
Route::get('/InternalCoplaintCommittee.aspx', function () { return view('front.pages.internal-complaint-committee'); })->name('internal-complaint-committee');
Route::get('/Student-grievance-redressal-committee.aspx', function () { return view('front.pages.student-grievance-redressal-committee'); })->name('student-grievance-redressal-committee');
Route::get('/RTI.aspx', function () { return view('front.pages.rti'); })->name('rti');
Route::get('/MinorityCell.aspx', function () { return view('front.pages.minority-cell'); })->name('minority-cell');
Route::get('/SCSTCell.aspx', function () { return view('front.pages.sc-st-cell'); })->name('sc-st-cell');
Route::get('/OBCCell.aspx', function () { return view('front.pages.obc-cell'); })->name('obc-cell');
Route::get('/Equal-opportunity-cell.aspx', function () { return view('front.pages.equal-opportunity-cell'); })->name('equal-opportunity-cell');
Route::get('/Women-cell.aspx', function () { return view('front.pages.womens-cell'); })->name('womens-cell');
Route::get('/Internship-cell.aspx', function () { return view('front.pages.internship-cell'); })->name('internship-cell');
Route::get('/Placement-cell.aspx', function () { return view('front.pages.placement-cell'); })->name('placement-cell');
Route::get('/Skill-development-cell.aspx', function () { return view('front.pages.Skill-development-cell'); })->name('skill-development-cell');
Route::get('/Iic.aspx', function () { return view('front.pages.iic'); })->name('iic');
Route::get('/Research-development-cell.aspx', function () { return view('front.pages.research-development-cell'); })->name('research-development-cell');
Route::get('/IQAC.aspx', function () { return view('front.pages.iqac-members'); })->name('iqac-members');
Route::get('/sss.aspx', function () { return view('front.pages.sss'); })->name('sss');
Route::get('/AQAR.aspx', function () { return view('front.pages.aqar-report'); })->name('aqar-report');
Route::get('/AISHE.aspx', function () { return view('front.pages.aishe'); })->name('aishe');
Route::get('/NIRF.aspx', function () { return view('front.pages.nirf-data'); })->name('nirf-data');
Route::get('/ISO.aspx', function () { return view('front.pages.iso'); })->name('iso');
Route::get('/Minutes-of-IQAC.aspx', function () { return view('front.pages.minutes-of-iqac-report'); })->name('minutes-of-iqac-report');
Route::get('/Museum-of-art-and-culture.aspx', function () { return view('front.pages.museum-of-art-and-culture'); })->name('museum-of-art-and-culture');
Route::get('/Seminar-halls.aspx', function () { return view('front.pages.seminar-halls'); })->name('seminar-halls');
Route::get('/Weather-station.aspx', function () { return view('front.pages.weather-station'); })->name('weather-station');
Route::get('/Medicinal-plant-garden.aspx', function () { return view('front.pages.medicinal-plant-garden'); })->name('medicinal-plant-garden');
Route::get('/Internet-facility.aspx', function () { return view('front.pages.Internet-facility'); })->name('Internet-facility');
Route::get('/Computational-facility.aspx', function () { return view('front.pages.computational-facility'); })->name('computational-facility');
Route::get('/power-backup-facility.aspx', function () { return view('front.pages.power-backup-facility'); })->name('power-backup-facility');
Route::get('/incubation-centre.aspx', function () { return view('front.pages.incubation-centre'); })->name('incubation-centre');
Route::get('/institutional-innovation-centre.aspx', function () { return view('front.pages.institutional-innovation-centre'); })->name('institutional-innovation-centre');
Route::get('/Contact-details.aspx', function () { return view('front.pages.contact-details'); })->name('contact-details');
Route::get('/Photo-gallery.aspx', function () { return view('front.pages.photo-gallery'); })->name('photo-gallery');
Route::get('/Upcoming-event.aspx', function () { return view('front.pages.upcoming-event'); })->name('upcoming-event');
Route::get('/Language-lab.aspx', function () { return view('front.pages.Language-lab'); })->name('Language-lab');

// // dashboard route
// Route::get('/dashboard', function () {
//     return view('front.pages.dashboard.dashboard');
// })->name('dashboard');

// Route::get('/notice', function () {
//     return view('dashboard.notice');
// })->name('notice');

// Route::get('/all-notice', function () {
//     return view('dashboard.all-notice');
// })->name('all-notice');


// Route::post('/notice/store', [NoticeController::class, 'store'])->name('notice.store');
// Route::get('/all-notice', [NoticeController::class, 'allNotice'])->name('all-notice');
// // Show edit form
// Route::get('/notice/edit/{id}', [NoticeController::class, 'edit'])->name('notice.edit');
// // Update notice
// Route::post('/notice/update/{id}', [NoticeController::class, 'update'])->name('notice.update');
// Route::get('/', [NoticeController::class, 'home'])->name('home');