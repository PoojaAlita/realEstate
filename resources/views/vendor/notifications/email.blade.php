<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Responsive HTML Email With Button</title>
  </head>
  <body class="" style="background-color: #ffffff;font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px;line-height: 14;margin: 0;padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; ">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate;mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;min-width: 100%;width: 100%; background-color: #eaebed;width: 100%; @media only screen and (max-width: 620px) {font-size: 28px !important;
    margin-bottom: 10px !important;}">
      <tr>
        <td>&nbsp;</td>
        <td class="container" style=" display: block;Margin: 0 auto !important;max-width: 580px; padding: 35px;width: 580px;padding: 0 !important;
        width: 100% !important;">
          <div class="header" style="padding: 20px 0;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
           
                <td class="align-center" width="100%" style="font-family: sans-serif;font-size: 14px;vertical-align: top; 
                text-align: center;line-height:1">
                  <a href="https://postdrop.io" style="color: #ec0867;text-decoration: underline;">
                    <img src="https://img.freepik.com/free-vector/real-estate-logo-template_1156-724.jpg?t=st=1682678588~exp=1682679188~hmac=91f6abdbaa77f23a15fb01bdd3c693d1e6c20fb6f9fb24abd583c9c5f21eb666" height="auto" width="120px" alt="Postdrop" style="border: none;-ms-interpolation-mode: bicubic;max-width: 100%; margin-left: 365px;">
                </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="content" style="box-sizing: border-box;display: block;Margin: 0 auto; max-width: 580px; padding: 10px;padding: 0 !important; 
          ">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader" style=" color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;
            mso-hide: all;visibility: hidden;width: 0; ">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" class="main" style="background: #ffffff; border-radius: 3px; width: 100%;border-left-width: 0 !important;margin-left: 193px;border-radius: 0 !important;border-right-width: 0 !important; ">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="box-sizing: border-box; padding: 20px;padding: 23px !important;line-height: 2">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;"><b>Hello!</b></p>
                        <p style=" font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">You are receiving this email because we received a password reset request for your account.</p>                   
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="box-sizing: border-box;width: 100%; min-width: auto;width: auto;    width: 100% !important;width: 100% !important;">
                          <tbody>
                            <tr>
                              <td align="center">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td style="padding-bottom: 0px;   background-color: #ec0867;    border-radius: 29px;"> 
                                        <a href="{{$actionUrl}}" target="_blank" style="color: #ec0867;text-decoration: underline;background-color: #ffffff;border-radius: 5px;text-align: center;background-color: #ffffff;border: solid 1px #ec0867;border-radius: 5px;box-sizing: border-box;color: #ec0867;cursor: pointer;display: inline-block;font-size: 14px;font-weight: bold;margin: 0;padding: 5px 13px;text-decoration: none;text-transform: capitalize;background-color: #ec0867;border-color: #ec0867;color: #ffffff; ">Reset Password
                                        </a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <br/>
                        <p>This password reset link will expire in 60 minutes. </p>
                        <p>If you did not request a password reset, no further action is required.</p>
                        <hr>
                        <p>If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:<span class="break-all">{{ $displayableActionUrl }}</span></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style=" clear: both;Margin-top: -23px;text-align: center;width: 100%;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block" style="padding-bottom: 10px;padding-top: 10px; color: #9a9ea6;font-size: 12px;text-align: center;line-height: 4;">
                    <span class="apple-link" style="color: #9a9ea6;font-size: 12px;text-align: center;margin-left: 197px; 

                    ">© <script>document.write(new Date().getFullYear())</script> Real Estate.All rights reserved.</span>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>