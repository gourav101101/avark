<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

     public function services()
    {
        return view('services');
    }

     public function erpServoces()
    {
        return view('services/ERP_System');
    }
     public function CRMSolutions()
    {
        return view('services/CRMSolutions');
    }
     public function CustomSoftwareDevelopment()
    {
        return view('services/CustomSoftwareDevelopment');
    }
     public function WebApplicationDevelopment()
    {
        return view('services/WebApplicationDevelopment');
    }
     public function CloudandDataMigration()
    {
        return view('services/CloudandDataMigration');
    }
     public function enterpriseIntegrationServices()
    {
        return view('services/enterpriseIntegrationServices');
    }



     public function products()
    {
        return view('products');
    }
     public function hms()
    {
        return view('products/hms');
    }
     public function KIOSKManagementSystem()
    {
        return view('products/KIOSK_Management_System');
    }
     public function FeedbackManagement()
    {
        return view('products/Feedback_Management');
    }
     public function ArkCloudCast()
    {
        return view('products/ArkCloudCast');
    }
     public function inventoryStockManagement()
    {
        return view('products/inventoryStockManagement');
    }
     public function PathologyDiagnosticManagement()
    {
        return view('products/PathologyDiagnosticManagement');
    }
     public function WhiteLabelPracticeManagementApplication()
    {
        return view('products/WhiteLabelPracticeManagementApplication');
    }
     public function DialysisManagementSystem()
    {
        return view('products/DialysisManagementSystem');
    }
     
     public function enterpriseSupportManagement()
    {
        return view('products/enterpriseSupportManagement');
    }
     public function DigitalSignageSolutions()
    {
        return view('products/DigitalSignageSolutions');
    }
     public function OPDManagementSystem()
    {
        return view('products/OPDManagementSystem');
    }
     public function industrialAssetManagement()
    {
        return view('products/industrialAssetManagement');
    }
     
    public function ContactUs()
    {
        return view('contact-us');
    }
    
    public function Blogs()
    {
        return view('Blogs');
    }
    public function BlogDetails()
    {
        return view('blogDetails');
    }

}
