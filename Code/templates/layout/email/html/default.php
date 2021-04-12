<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Committee Control Panel</title>
    </head>

    <body style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">
        <table width="650" border="0" align="center">
            <tbody>
            <tr bgcolor="#e33b30">
                <td>
                    <table width="100%" border="0" cellpadding="10">
                        <tbody>
                            <tr valign="middle">
                                <td width="48%"><a href="<?= FULL_BASE_URL ?>"><img src="<?= FULL_BASE_URL ?>img/sskb.png" width="133" height="67" alt=""/></a></td>
                                <td width="52%" style="color:#ffffff; font-size:16px;">
                                    Committee Control Panel
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="2"></td>
            </tr>

            <tr>
                <td></td>
            </tr>

            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="10">
                        <tbody>
                            <tr>
                                <td style="font-size:14px; line-height: 1.3; color:#545454;'">
                                    <?= $this->fetch('content') ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="5" bgcolor="#e33b30"></td>
            </tr>

            </tbody>
        </table>
    </body>
</html>
