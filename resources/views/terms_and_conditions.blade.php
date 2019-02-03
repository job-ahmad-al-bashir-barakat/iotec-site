@extends('master')

@section('content')

    @include('_nav')
    @include('_page_header',[
        'header' => 'Terms And Conditions',
        'image'  => url('assets/img/bg9.jpg'),
    ])
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Terms of Service</h1>
                        <p>This license is a legal agreement between you and Laravel LLC for the use of Laravel Nova
                            Software (the “Software”). By downloading any Laravel Nova files, add-ons, or resources,
                            you agree to be bound by the terms and conditions of this license. Laravel LLC reserves
                            the right to alter this agreement at any time, for any reason, without notice.</p>
                        <h2>Permitted Use</h2>
                        <p>One license grants the right to use the Software on one site and unlimited development
                            sites. Each additional site using the Software requires an additional purchased
                            license.</p>
                        <h2>Restrictions</h2>
                        <p>Unless you have been granted prior, written consent from Laravel LLC, you may not:</p>
                        <ul>
                            <li>Reproduce, distribute, or transfer the Software, or portions thereof, to any third
                                party.
                            </li>
                            <li>Sell, rent, lease, assign, or sublet the Software or portions thereof.</li>
                            <li>Grant rights to any other person.</li>
                            <li>Use the Software in violation of any U.S. or international law or regulation.</li>
                        </ul>
                        <p>All copyright and proprietary notices and logos in the Control Panel and within the
                            Software files must remain intact.</p>
                        <h2>Making Copies</h2>
                        <p>You may make copies of the Software for back-up purposes, provided that you reproduce the
                            Software in its original form and with all proprietary notices on the back-up copy.</p>
                        <h2>Software Modification</h2>
                        <p>You may alter, modify, or extend the Software for your own use, or commission a
                            third-party to perform modifications for you, but you may not resell, redistribute or
                            transfer the modified or derivative version without prior written consent from Laravel
                            LLC. Components from the Software may not be extracted and used in other programs
                            without prior written consent from Laravel LLC.</p>
                        <h2>Technical Support</h2>
                        <p>Laravel LLC does not provide direct phone support at this time. No representations or
                            guarantees are made regarding the response time in which e-mail support questions are
                            answered, but we will do our best to respond quickly.</p>
                        <h2>Refunds</h2>
                        <p>Laravel LLC offers limited refunds on software within 15 days of purchase. Contact
                            nova@laravel.com for assistance.</p>
                        <h2>Indemnity</h2>
                        <p>You agree to indemnify and hold harmless Laravel LLC for any third-party claims, actions
                            or suits, as well as any related expenses, liabilities, damages, settlements or fees
                            arising from your use or misuse of the Software, or a violation of any terms of this
                            license.</p>
                        <h2>Disclaimer Of Warranty</h2>
                        <p>THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED,
                            INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, NON-INFRINGEMENT,
                            MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. FURTHER, LARAVEL LLC DOES NOT
                            WARRANT THAT THE SOFTWARE OR ANY RELATED SERVICE WILL ALWAYS BE AVAILABLE.</p>
                        <h2>Limitations Of Liability</h2>
                        <p>YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. IN NO EVENT
                            SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE FOR CLAIMS, DAMAGES OR
                            OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION WITH THE SOFTWARE. LICENSE
                            HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE APPROPRIATENESS OF USE AND ASSUME ALL
                            RISKS ASSOCIATED WITH ITS USE, INCLUDING BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS,
                            DAMAGE TO EQUIPMENT, LOSS OF DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR
                            INTERRUPTION OF OPERATIONS.</p></div>
                </div>
            </div>
        </div>
    </div>
    @include('_page_footer')

@endsection