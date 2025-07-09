<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\homeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Speakers;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\SpeakerAdminController;
use App\Http\Controllers\Testimonial;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactUsFormController;
Route::get('/', [homeController::class, 'show']);
Route::get('/isuw-2022-presentations', [homeController::class, 'presentation']);
Route::get('/isuw-2023-presentations', [homeController::class, 'presentation2023']);
Route::get('/2024/isuw-2024-presentations', [homeController::class, 'presentation2024']);

Route::get('/speakers',[Speakers::class, 'show']);
Route::get('/speakers-2023',[Speakers::class, 'showspeaker']);
Route::get('/speakers-2024',[Speakers::class, 'showspeaker24']);
Route::get('/testimonial',[TestimonialController::class, 'show']);
Route::get('/speaker/{id}',[Speakers::class, 'showDetail']);
Route::get('/speakerr/{id}',[Speakers::class, 'showDetailspkeaker']);
Route::get('/speaker24/{id}',[Speakers::class, 'showDetailspkeaker24']);
Route::get('/admin', function () {
     return view('/admin/admin');
});
//Route::view('/contact-us', view:'pages.contact-us')->name('contact-us');
// Route::get('/admin/speakers', function () {
//      return view('/admin/speakers');
// });
 Route::get('/contact-us', function () {
      return view('/components/contact-us');
 });
  Route::get('/isuw-2021', function () {
      return view('/components/isuw-2021');
 });
  Route::get('/technical-tours', function () {
      return view('/components/technical-tours');
 });
  Route::get('/brochure', function () {
      return view('/components/brochure');
 });
 Route::get('/isgw-post-event-report', function () {
      return view('/components/isgw-post-event-report');
 });
 Route::get('/exhibition-themes', function () {
      return view('/components/exhibition-themes');
 });
 Route::get('/exhibition-package-2021', function () {
      return view('/components/exhibition-package-2021');
 });
 Route::get('/exhibition-package-2024', function () {
      return view('/components/exhibition-package-2024');
 });
 Route::get('/conference-themes-2022', function () {
      return view('/components/conference-themes-2022');
 });
  Route::get('/conference-themes-2023', function () {
      return view('/components/conference-themes-2023');
 });
 Route::get('/conference-themes', function () {
      return view('/components/conference-themes');
 });
  Route::get('/conference-agenda-and-program', function () {
      return view('/components/conference-agenda-and-program');
 });
 Route::get('/conference-agenda-and-program-2025', function () {
      return view('/components/conference-agenda-and-program-2025');
 });
  Route::get('/partnership-opportunity-information', function () {
      return view('/components/partnership-opportunity-information');
 });
  Route::get('/isuw-participated-utilties', function () {
      return view('/components/isuw-participated-utilties');
 });
  Route::get('/privacy-policy', function () {
      return view('/components/privacy-policy');
 });
 Route::get('/podcast', function () {
      return view('/components/podcast');
 });
  Route::get('/terms-and-conditions', function () {
      return view('/components/terms-and-conditions');
 });
  Route::get('/refund-and-cancellation', function () {
      return view('/components/refund-and-cancellation');
 });
  Route::get('/important-information-for-foreign-delegates', function () {
      return view('/components/important-information-for-foreign-delegates');
 });
  Route::get('/mobile-apps', function () {
      return view('/components/mobile-apps');
 });
 Route::get('/key-partners', function () {
      return view('/components/key-partners');
 });
 Route::get('/supporting-organization', function () {
      return view('/components/supporting-organization');
 });
 Route::get('/media-and-marketing-partner', function () {
      return view('/components/media-and-marketing-partner');
 });
 Route::get('/confirmed-exhibitors', function () {
      return view('/components/confirmed-exhibitors');
 });
 Route::get('/participating-utilies', function () {
      return view('/components/participating-utilies');
 });
 Route::get('/isuw-registration-2021', function () {
      return view('/components/isuw-registration-2021');
 });
 Route::get('/register_ISUW2023', function () {
      return view('/components/register_ISUW2023');
 });
  Route::get('/register__ISUW2024', function () {
      return view('/components/register__ISUW2024');
 });
 Route::get('/key-highlights', function () {
      return view('/components/key-highlights');
 });
 Route::get('/introduction', function () {
      return view('/components/introduction');
 });
 Route::get('/about-organizer', function () {
      return view('/components/about-organizer');
 });
 Route::get('/theme-and-session-partners', function () {
      return view('/components/theme-and-session-partners');
 });
 Route::get('/theme-and-session-partners-2023', function () {
      return view('/components/theme-and-session-partners-2023');
 });
 Route::get('/participating-countries', function () {
      return view('/components/participating-countries');
 });
 Route::get('/supporting-ministries', function () {
      return view('/components/supporting-ministries');
 });
 Route::get('/ISUW-in-media', function () {
      return view('/components/ISUW-in-media');
 });
 Route::get('/supporting-organization-2022', function () {
      return view('/components/supporting-organization-2022');
 });
 Route::get('/supporting-organization-2023', function () {
      return view('/components/supporting-organization-2023');
 });
 Route::get('/supporting-organization-2024', function () {
      return view('/components/supporting-organization-2024');
 });
 Route::get('/media-and-marketing-partner-2022', function () {
      return view('/components/media-and-marketing-partner-2022');
 });
 Route::get('/media-and-marketing-partner-2023', function () {
      return view('/components/media-and-marketing-partner-2023');
 });
 Route::get('/media-and-marketing-partner-2024', function () {
      return view('/components/media-and-marketing-partner-2024');
 });
 
 Route::get('/innovation-awards-2022', function () {
      return view('/components/innovation-awards-2022');
 });
 Route::get('/innovation-awards', function () {
      return view('/components/innovation-awards');
 });
 Route::get('/press-release', function () {
      return view('/components/press-release');
 });
 Route::get('/master-classes', function () {
      return view('/components/master-classes');
 });
 Route::get('/technical-paper-isuw-2022', function () {
      return view('/components/technical-paper-isuw-2022');
 });
 
 Route::get('/technical-paper-isuw', function () {
      return view('/components/technical-paper-isuw');
 });

//  Route::get('/isuw-2022-presentations', function () {
//       return view('/components/isuw-2022-presentations');
//  });
  Route::get('/key-partners-2021', function () {
      return view('/components/key-partners-2021');
 });
   Route::get('/key-partners-2023', function () {
      return view('/components/key-partners-2023');
 });
 Route::get('/key-partners-2024', function () {
      return view('/components/key-partners-2024');
 });
 Route::get('/photo-gallery', function () {
      return view('/components/photo-gallery');
 }); 
 Route::get('/video-gallery', function () {
      return view('/components/video-gallery');
 });
 Route::get('/exhibition-gallery', function () {
      return view('/components/exhibition-gallery');
 });
 Route::get('/paynow', function () {
      return view('/components/paynow');
 });
 Route::get('/supporting-ministries-2021', function () {
      return view('/components/supporting-ministries-2021');
 });
 Route::get('/supporting-ministries-2023', function () {
      return view('/components/supporting-ministries-2023');
 });
 Route::get('/supporting-ministries-2024', function () {
      return view('/components/supporting-ministries-2024');
 });
 Route::get('/thanku', function () {
     return view('/components/thanku');
});
 Route::get('/technical-paper-isuw-2021', function () {
     return view('/components/technical-paper-isuw-2021');
});
Route::get('/participating-utilies-2021', function () {
     return view('/components/participating-utilies-2021');
});
Route::get('/participating-utilies-2023', function () {
     return view('/components/participating-utilies-2023');
});
Route::get('/participating-utilies-2024', function () {
     return view('/components/participating-utilies-2024');
});
Route::get('/isuw-2023-brochure', function () {
     return view('/components/isuw-2023-brochure');
});
Route::get('/isuw-2024-brochure', function () {
     return view('/components/isuw-2024-brochure');
});
Route::get('/isuw-2025-brochure', function () {
     return view('/components/isuw-2025-brochure');
});
Route::get('/theme-and-session-partners-2021', function () {
     return view('/components/theme-and-session-partners-2021');
});
Route::get('/theme-and-session-partners-2023', function () {
     return view('/components/theme-and-session-partners-2023');
});
Route::get('/theme-and-session-partners-2024', function () {
     return view('/components/theme-and-session-partners-2024');
});
Route::get('/confirmed-exhibitors-2021', function () {
      return view('/components/confirmed-exhibitors-2021');
 });
 Route::get('/confirmed-exhibitors-2023', function () {
      return view('/components/confirmed-exhibitors-2023');
 });
 Route::get('/confirmed-exhibitors-2024', function () {
      return view('/components/confirmed-exhibitors-2024');
 });
 Route::get('/innovation-awards-2023', function () {
     return view('/components/innovation-awards-2023');
});
 Route::get('/winners-innovation-awards-2023', function () {
     return view('/components/winners-innovation-awards-2023');
});
Route::get('/winners-innovation-awards-2024', function () {
     return view('/components/winners-innovation-awards-2024');
});
 Route::get('/winners-innovation-awards-2022', function () {
     return view('/components/winners-innovation-awards-2022');
});
Route::get('/enquiry', [ContactUsFormController::class, 'createForm']);
Route::post('/enquiry', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/login',[LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate'])->name('login');
Route::get('/presentation',[LoginController::class,'presentation']);
Route::post('/presentation', [LoginController::class,'presentationauthenticate'])->name('loginpresentation');
Route::get('/presentation2023',[LoginController::class,'presentation2023']);
Route::post('/presentation2023', [LoginController::class,'presentationauthenticate2023'])->name('loginpresentation');
Route::get('/presentation2024',[LoginController::class,'presentation2024']);
Route::post('/presentation2024', [LoginController::class,'presentationauthenticate2024'])->name('loginpresentation');
Route::get('/admin',[admincontroller::class, 'show']);
Route::get('/admin/speakers',[SpeakerAdminController::class, 'show']);
Route::get('/admin/utility',[UtilityController::class, 'show']);
Route::get('/admin/partners',[PartnerController::class, 'show']);
Route::get('/admin/exhibitor',[ExhibitorController::class, 'show']);
Route::post('upload-banner', [BannerController::class,'upload']);
Route::post('upload-speaker', [BannerController::class,'uploadSpeaker']);
Route::post('upload-exhibitor', [BannerController::class,'uploadExhibitor']);
Route::post('upload-utility', [BannerController::class,'uploadUtility']);
Route::post('upload-partner', [BannerController::class,'uploadPartner']);
Route::post('remove-banner', [BannerController::class,'removeBanner']);
Route::post('remove-speaker', [SpeakerAdminController::class,'removeSpeaker']);
Route::post('remove-utility', [UtilityController::class,'removeUtility']);
Route::post('remove-partner', [PartnerController::class,'removePartner']);
Route::post('remove-exhibitor', [ExhibitorController::class,'removeExhibitor']);
Route::post('remove-testimonial', [Testimonial::class,'removeTestimonial']);
Route::post('upload-testimonial', [BannerController::class,'uploadTestimonial']);
Route::get('/admin/testimonial',[Testimonial::class, 'show']);
// Route::get('/admin/speakers',function () {
//      if(Auth::check()){
//           return redirect('/admin/speakers');
//      }
//      return redirect('/login');
//  });
//  Route::get('/admin/utility',function () {
//      if(Auth::check()){
//           return redirect('/admin/utility');
//      }
//      return redirect('/login');
//  });
//  Route::get('/admin/utility',function () {
//       if(Auth::check()){
//            return redirect('/admin/utility');
//       }
//       return redirect('/login');
//   });
//   Route::get('/admin/exhibitor',function () {
//       if(Auth::check()){
//            return redirect('/admin/exhibitor');
//       }
//       return redirect('/login');
//   });

//   Route::middleware(['Auth'])->group(function () {
//      Route::get('/admin/speakers', function () {
//          // Uses first & second Middleware
//      });
 
//  });