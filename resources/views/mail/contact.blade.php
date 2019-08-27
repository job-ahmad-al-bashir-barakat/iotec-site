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
                         <h2>{!! $subject !!}</h2>
                         @if(!empty($phone))
                             <p style="margin-top: 20px;font-weight:bold;">
                                 <img src="https://www.iotec.me/assets/img/email/telephone.png" style="width: 15px; vertical-align: middle; margin-right: 10px;fill: #7b1fa2;"/>
                                 {{ $phone }}
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
                             <a href="{{ url('blog') }}" target="_blank" style="color: #999999; font-weight: 700;">Blog</a>
                             -
                             <a href="{{ url('dev-feed') }}" target="_blank" style="color: #999999; font-weight: 700;">Dev Feed</a>
                             -
                             <a href="{{ url('faq') }}" target="_blank"
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