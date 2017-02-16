<!DOCTYPE html>
<html>
    <head>
        <title>Wissen</title>

    </head>
    <body>
        <div class="container">
            <h1>Wissen Project</h1>
            <ul >
                <li>Home</li>
                <li>Industries
                    <ul>
                        <li><a href="{{route('banking-and-financial-services')}}" >Banking and Financial Services</a></li>
                        <li><a href="{{route('telecom')}}" >Telecom</a></li>
                        <li><a href="{{route('manufacturing')}}">Manufacturing</a></li>
                        <li><a href="{{route('solutions/healthcare')}}" >Healthcare</a></li>
                        <li><a href="{{route('solutions/retail-sector')}}">Retail</a></li>
                    </ul>
                </li>
                <li>Services
                    <ul>
                        <li><a href="{{route('services/consulting-services')}}" >Consulting Services</a></li>
                        <li><a href="{{route('services/quality-assurance')}}">Quality Assurance</a></li>
                        <li><a href="{{route('services/enterprise-services')}}" >Enterprise Services</a>
                            <ul>
                                <li><a href="{{route('services/enterprise-services/application-services')}}">Application Services</a></li>
                                <li><a href="{{route('services/enterprise-services/erp-services')}}">ERP Services</a></li>
                                <li><a href="{{route('services/enterprise-services/qa-testing')}}">QA &amp; Testing</a></li>
                                <li><a href="{{route('services/enterprise-services/analytics-information-management')}}">Analytics &amp; Information Management</a></li>
                                <li><a href="{{route('services/enterprise-services/mobility')}}">Mobility</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('services/infrastructure-management')}}" >Infrastructure Management</a>
                            <ul>
                                <li><a href="{{route('services/infrastructure-management/itil-consulting')}}">ITIL Consulting</a></li>
                                <li><a href="{{route('services/infrastructure-management/managed-services')}}">Managed Services</a></li>
                                <li><a href="{{route('services/infrastructure-management/technical-support')}}">Technical Support</a></li>
                                <li><a href="{{route('services/infrastructure-management/application-packaging')}}">Application Packaging</a></li>
                                <li><a href="{{route('services/infrastructure-management/it-asset-management')}}">IT Asset Management</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Company
                    <ul>
                        <li><a href="{{route('company/about')}}">About</a></li>
                        <li><a href="{{route('company/leadership')}}">Leadership</a></li>
                        <li><a href="{{route('company/partners')}}">Partners</a></li>
                        <li><a href="{{route('company/social-responsibility')}}">Social Responsibility</a></li>
                    </ul>
                </li>
                <li>Careers
                    <ul>
                        <li><a href="{{route('careers/working-with-wissen')}}">Working for Wissen</a></li>
                        <li><a href="{{route('careers/careerswissen')}}">Current Opportunities</a></li>
                    </ul>
                </li>
                <li>Contact
                    <ul>
                        <li><a href="{{route('contact/locations')}}">Locations</a></li>
                        <li><a href="{{route('contact/write-to-us')}}">Write to Us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>
