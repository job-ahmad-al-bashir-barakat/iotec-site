<html>
 <head>
     <title></title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <style type="text/css">
         /* FONTS */
         @media screen {
             @font-face {
                 font-family: 'Lato';
                 font-style: normal;
                 font-weight: 400;
                 src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
             }

             @font-face {
                 font-family: 'Lato';
                 font-style: normal;
                 font-weight: 700;
                 src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
             }

             @font-face {
                 font-family: 'Lato';
                 font-style: italic;
                 font-weight: 400;
                 src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
             }

             @font-face {
                 font-family: 'Lato';
                 font-style: italic;
                 font-weight: 700;
                 src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
             }
         }

         /* CLIENT-SPECIFIC STYLES */
         body, table, td, a {
             -webkit-text-size-adjust: 100%;
             -ms-text-size-adjust: 100%;
         }

         table, td {
             mso-table-lspace: 0pt;
             mso-table-rspace: 0pt;
         }

         img {
             -ms-interpolation-mode: bicubic;
         }

         /* RESET STYLES */
         img {
             border: 0;
             height: auto;
             line-height: 100%;
             outline: none;
             text-decoration: none;
         }

         table {
             border-collapse: collapse !important;
         }

         body {
             height: 100% !important;
             margin: 0 !important;
             padding: 0 !important;
             width: 100% !important;
         }

         /* iOS BLUE LINKS */
         a[x-apple-data-detectors] {
             color: inherit !important;
             text-decoration: none !important;
             font-size: inherit !important;
             font-family: inherit !important;
             font-weight: inherit !important;
             line-height: inherit !important;
         }

         /* MOBILE STYLES */
         @media screen and (max-width: 600px) {
             h1 {
                 font-size: 32px !important;
                 line-height: 32px !important;
             }
         }

         /* ANDROID CENTER FIX */
         div[style*="margin: 16px 0;"] {
             margin: 0 !important;
         }
     </style>
 </head>
 <body style="background-color: rgba(156, 39, 176, 0.6); margin: 0 !important; padding: 0 !important;">

 <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
     We're thrilled to have you here! Get ready to dive into your new account.
 </div>

 <table border="0" cellpadding="0" cellspacing="0" width="100%">
     <!-- LOGO -->
     <tbody>
     <tr>
         <td bgcolor="#7b1fa2" align="center">
             <!--[if (gte mso 9)|(IE)]>
             <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                 <tr>
                     <td align="center" valign="top" width="600">
             <![endif]-->
             <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                 <tbody>
                 <tr>
                     <td align="center" valign="top" style="padding: 80px 10px 80px 10px;">
                         <a href="{{ url('/') }}" target="_blank">
                             <img alt="Logo" src="https://www.iotec.me/assets/img/logo-full.png"
                                  style="display: block; font-family: 'Lato', Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px; width: 250px;"
                                  border="0" title="IOTec" alt="IOTec">
                         </a>
                     </td>
                 </tr>
                 </tbody>
             </table>
             <!--[if (gte mso 9)|(IE)]>
             </td>
             </tr>
             </table>
             <![endif]-->
         </td>
     </tr>
     <!-- HERO -->
     <tr>
         <td bgcolor="#7b1fa2" align="center" style="padding:0px 10px 0px 10px">

             <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
                 <tbody>
                 <tr>
                     <td bgcolor="#ffffff" align="center" valign="top" style="padding:40px 20px 20px 20px;border-radius:4px 4px 0px 0px;color:#111111;font-family:'Lato',Helvetica,Arial,sans-serif;font-size:48px;font-weight:400;letter-spacing:4px;line-height:48px">
                         <h1 style="font-size:42px;font-weight:400;margin:0">Welcome!</h1>
                     </td>
                 </tr>
                 </tbody>
             </table>

         </td>
     </tr>
     <!-- COPY BLOCK -->
     <tr>
         <td bgcolor="#f4f4f4" align="center" style="padding:0px 10px 0px 10px">

             <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">

                 <tbody>
                 <tr>
                     <td bgcolor="#ffffff" align="left" style="padding: 30px 30px 0;color:#666666;font-family:'Lato',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:25px">
                         <h3>{!! $subject !!}</h3>
                         @if(!empty($phone))
                             <p style="margin-top: 20px;font-weight:bold;">
                                 <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="width: 13px; vertical-align: middle; margin-right: 10px;fill: #7b1fa2;enable-background:new 0 0 480.56 480.56;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8
                                                c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4
                                                c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8
                                                c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3
                                                c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9
                                                c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z"></path>
                                            <path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1
                                                c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z"></path>
                                            <path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5
                                                l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z"></path>
                                        </g>
                                    </g>
                                </svg> {{ $phone }}
                             </p>
                         @endif
                         <p style="margin:0">
                             {!! $content !!}
                         </p>
                     </td>
                 </tr>

                 <tr>
                     <td bgcolor="#ffffff" align="left" style="padding:20px 30px 20px 30px;color:#666666;font-family:'Lato',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:25px">
                         <hr style="width: 90%; margin: 50px auto; border-color: #f7f7f7; border-width: 0.5px;">
                         <p style="margin:0">If you have any questions, just reply to this email—we're always happy to
                             help out.</p>
                     </td>
                 </tr>

                 <tr>
                     <td bgcolor="#ffffff" align="left" style="padding:0px 30px 40px 30px;border-radius:0px 0px 4px 4px;color:#666666;font-family:'Lato',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:25px">
                         <p style="margin:0">Cheers,<br>IOTec Team</p>
                     </td>
                 </tr>
                 </tbody>
             </table>

         </td>
     </tr>
     <!-- FOOTER -->
     <tr>
         <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
             <!--[if (gte mso 9)|(IE)]>
             <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                 <tr>
                     <td align="center" valign="top" width="600">
             <![endif]-->
             <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                 <!-- NAVIGATION -->
                 <tbody>
                 <tr>
                     <td bgcolor="#f4f4f4" align="left"
                         style="padding: 30px 30px 30px 30px;color: #aaaaaa;font-family: 'Lato', Helvetica, Arial, sans-serif;font-size: 12px;font-weight: 400;line-height: 18px;text-align: center;">
                         <p style="margin: 0;">
                             <a href="http://thetheme.io" target="_blank" style="color: #999999; font-weight: 700;">Blog</a>
                             -
                             <a href="http://thetheme.io" target="_blank" style="color: #999999; font-weight: 700;">Dev Feeds</a>
                             -
                             <a href="http://thetheme.io" target="_blank"
                                style="color: #999999; font-weight: 700;">FAQ</a>
                         </p>
                     </td>
                 </tr>

                 <!-- ADDRESS -->
                 <tr>
                     <td bgcolor="#f4f4f4" align="left"
                         style="padding: 0px 30px 30px 30px;color: #aaaaaa;font-family: 'Lato', Helvetica, Arial, sans-serif;font-size: 12px;font-weight: 400;line-height: 18px;text-align: center;">
                         <p style="margin: 0;">
                             Copyright &#xA9; {{ date('Y') }}, <a href="{{ url('/') }}" target="_blank">IOTec IT Solutions</a> All Rights Reserved.
                         </p>
                     </td>
                 </tr>
                 </tbody>
             </table>
             <!--[if (gte mso 9)|(IE)]>
             </td>
             </tr>
             </table>
             <![endif]-->
         </td>
     </tr>
     </tbody>
 </table>


 </body>
 </html>