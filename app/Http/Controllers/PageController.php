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
     public function MobileAppDevelopment()
    {
        return view('services/MobileAppDevelopment');
    }
     public function CloudandDataMigration()
    {
        return view('services/CloudandDataMigration');
    }
     public function enterpriseIntegrationServices()
    {
        return view('services/enterpriseIntegrationServices');
    }

     public function DigitalHealthcareSolution()
    {
        return view('services/DigitalHealthcareSolution');
    }

     public function TeleConsultation()
    {
        return view('services/TeleConsultation');
    }

     public function cms()
    {
        return view('services/CMS');
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
    
    public function Partners()
    {
        return view('partners');
    }
    
    public function Blogs()
    {
        return view('Blogs');
    }
    public function BlogDetails($slug)
    {
        $blogs = [
            'future-of-erp-systems' => [
                'title' => 'The Future of ERP Systems: Trends to Watch in 2026',
                'image' => 'assets/imgs/inner/features/analytics_dashboard_1783400138562.png',
                'author' => 'kuldeep Meena',
                'date' => 'Oct 04, 2026',
                'tag' => 'Agency',
                'content' => '
                        <p class="mb-2">
                            In 2026, Enterprise Resource Planning (ERP) systems are evolving from traditional management tools into intelligent business ecosystems.
                            Modern ERP solutions are now powered by artificial intelligence, cloud computing, automation,
                            and real-time analytics. Businesses are no longer using ERP just for accounting or inventory — they are using it to drive strategy, efficiency, and growth. At Avark IT Services, we help organizations implement future-ready ERP systems that align with evolving market demands.
                        </p>
                        <h3 class="title">1. AI-Powered Decision Making</h3>
                        <p>
                            Artificial Intelligence is becoming the backbone of ERP systems. In 2026,
                            ERP platforms will not only store data but also analyze it and provide actionable insights.
                            From demand forecasting to predictive maintenance and automated reporting, AI-driven ERP helps businesses make
                            smarter and faster decisions.
                        </p>
                        <ul class="list">
                            <li><i class="fa-solid fa-check"></i> Predictive analytics for accurate forecasting</li>
                            <li><i class="fa-solid fa-check"></i> Smart financial reporting and automated insights</li>
                            <li><i class="fa-solid fa-check"></i> AI-based inventory and supply chain optimization</li>
                            <li><i class="fa-solid fa-check"></i> Intelligent dashboards for leadership teams</li>
                        </ul>
                        <h3 class="title mt-4 mb-3">2. Cloud-First ERP Adoption</h3>
                        <p>
                            Cloud-based ERP systems are dominating the market in 2026. Businesses prefer cloud solutions due to lower infrastructure costs, better scalability, remote accessibility, and enhanced data security. Cloud ERP enables companies to operate seamlessly across multiple locations while ensuring real-time synchronization of data.
                        </p>

                        <h3 class="title mt-4 mb-3">3. Seamless Integration with CRM & Business Tools</h3>
                        <p>
                            Modern ERP systems are no longer standalone platforms. They integrate with CRM systems, HR software, payment gateways, e-commerce platforms, and analytics tools. This integration creates a unified ecosystem where all departments work with synchronized real-time data.
                        </p>

                        <h3 class="title mt-4 mb-3">4. Automation & Workflow Optimization</h3>
                        <p>
                            Automation is reducing manual workload across departments. ERP systems in 2026 automate invoicing, payroll, order management, compliance reporting, and approval workflows. This reduces errors, improves efficiency, and lowers operational costs significantly.
                        </p>

                        <h3 class="title mt-4 mb-3">5. Enhanced Data Security & Compliance</h3>
                        <p>
                            With increasing cyber threats, ERP security is becoming a top priority. Role-based access control, multi-factor authentication, encrypted cloud storage, and compliance with global data protection standards are essential features of modern ERP systems.
                        </p>

                        <h3 class="title mt-4 mb-3">Why Businesses Must Upgrade Their ERP in 2026</h3>
                        <p>
                            Organizations that adopt advanced ERP technologies gain a competitive advantage through better efficiency, smarter decision-making, and scalable growth. Investing in a modern ERP solution today ensures long-term sustainability and operational excellence.
                        </p>

                        <p>
                            At Avark IT Services, we specialize in custom ERP development, cloud migration, CRM integration, and enterprise automation. Our mission is to help businesses build intelligent, scalable, and secure ERP ecosystems that drive digital transformation.
                        </p>
                '
            ],
            'choose-right-erp-inventory-system' => [
                'title' => 'How to Choose the Right ERP or Inventory System for Your Business',
                'image' => 'assets/imgs/inner/features/inventory_box_1783400245007.png',
                'author' => 'TusHar',
                'date' => 'Oct 04, 2026',
                'tag' => 'Avark',
                'content' => '
                        <p class="mb-2">
                            Choosing the right ERP or inventory management system can make or break a business. With so many options available today, it\'s crucial to identify your specific business needs before making a decision. An ideal system should not only manage your current operations but also scale with your future growth.
                        </p>
                        
                        <h3 class="title mt-4 mb-3">1. Assess Your Business Needs</h3>
                        <p>
                            Before looking at software vendors, you must conduct an internal audit. What are your biggest operational bottlenecks? Do you struggle with stockouts, poor financial visibility, or disconnected departments? Identifying these pain points will help you filter out ERP systems that don\'t address your core issues.
                        </p>

                        <h3 class="title mt-4 mb-3">2. Cloud vs. On-Premise</h3>
                        <p>
                            Today, cloud-based ERP solutions offer flexibility and real-time access from anywhere, which is essential for modern distributed teams. They typically have lower upfront costs compared to on-premise systems, which require substantial hardware and IT maintenance investments.
                        </p>

                        <ul class="list">
                            <li><i class="fa-solid fa-check"></i> Scalability to grow alongside your business operations</li>
                            <li><i class="fa-solid fa-check"></i> Seamless integrations with your existing software stack</li>
                            <li><i class="fa-solid fa-check"></i> Robust data security and disaster recovery protocols</li>
                            <li><i class="fa-solid fa-check"></i> Mobile accessibility for remote workforce management</li>
                        </ul>

                        <h3 class="title mt-4 mb-3">3. Evaluate Total Cost of Ownership (TCO)</h3>
                        <p>
                            When evaluating ERP solutions, don\'t just look at the initial license fee. Consider the implementation costs, data migration, employee training, and ongoing technical support. Vendor support is critical during the transition phase to minimize downtime and ensure smooth adoption.
                        </p>
                        
                        <p>
                            At Avark, we help you navigate these choices. Our team specializes in assessing your operational requirements and deploying customized Inventory Management and ERP systems that fit your exact workflow.
                        </p>
                '
            ],
            'crm-helps-startups-scale-faster' => [
                'title' => 'How CRM Helps Startups Scale Faster',
                'image' => 'assets/imgs/inner/features/digital_marketing_1783400265688.png',
                'author' => 'Kuldeep',
                'date' => 'Oct 04, 2026',
                'tag' => 'Avark',
                'content' => '
                        <p class="mb-2">
                            For startups, managing customer relationships efficiently is the key to rapid growth. A robust Customer Relationship Management (CRM) system centralizes customer data, streamlines communication, and automates sales processes, allowing your small team to punch above its weight.
                        </p>
                        
                        <h3 class="title mt-4 mb-3">1. Accelerating Growth with Data</h3>
                        <p>
                            With a CRM, startups can track every interaction, identify bottlenecks in the sales funnel, and deliver personalized experiences at scale. This data-driven approach ensures that no lead falls through the cracks and every customer feels valued, drastically improving retention rates.
                        </p>

                        <h3 class="title mt-4 mb-3">2. Automating Repetitive Tasks</h3>
                        <p>
                            Startups operate lean. Your sales team shouldn\'t be spending hours manually entering data or sending follow-up emails. A modern CRM automates these workflows, allowing your team to focus on high-value tasks like closing deals and building strategic partnerships.
                        </p>

                        <ul class="list">
                            <li><i class="fa-solid fa-check"></i> Centralized customer database for a unified view</li>
                            <li><i class="fa-solid fa-check"></i> Automated email campaigns and lead nurturing</li>
                            <li><i class="fa-solid fa-check"></i> Real-time sales forecasting and performance tracking</li>
                            <li><i class="fa-solid fa-check"></i> Seamless integrations with marketing and support tools</li>
                        </ul>

                        <h3 class="title mt-4 mb-3">3. Scaling Customer Support</h3>
                        <p>
                            As your user base grows, so does the volume of support tickets. A CRM integrated with your helpdesk ensures that support agents have full context of a customer\'s history before replying. This leads to faster resolution times and higher customer satisfaction scores.
                        </p>
                        
                        <p>
                            Implementing a CRM early on sets the foundation for scalable growth. Let Avark IT Services customize a powerful CRM solution tailored to your startup\'s unique sales cycle and operational needs.
                        </p>
                '
            ]
        ];

        if (!array_key_exists($slug, $blogs)) {
            abort(404);
        }

        $blog = $blogs[$slug];
        return view('blogDetails', compact('blog'));
    }

}
