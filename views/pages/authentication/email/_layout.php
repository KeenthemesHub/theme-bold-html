<style>
    html,body {
        padding: 0;
        margin:0;
    }
</style>

<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
            <tr>
                <td align="center" valign="center" style="text-align:center; padding: 40px">
                    <a href="https://keenthemes.com" rel="noopener" target="_blank">
                        <img alt="Logo" src="<?php echo Theme::getMediaUrlPath() . 'logos/mail.svg'?>" style="min-height: 50px;"/>
                    </a>
                </td>
            </tr>

            <tr>
                <td align="left" valign="center">
                    <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">

                        <?php Theme::getPageLayoutView()?>
                        
                        <div style="padding-bottom: 10px">
                            Kind regards,<br>
                            The Keenthemes Team.
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                    <p>Floor 5, 450 Avenue of the Red Field, SF, 10050, USA.</p>
                    <p><?php date('Y')?>  Copyright &copy; <a href="https://keenthemes.com" rel="noopener" target="_blank">Keenthemes</a>.</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>