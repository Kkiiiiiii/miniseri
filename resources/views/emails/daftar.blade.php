<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Sineas</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:8px;
                    box-shadow:0 4px 12px rgba(0,0,0,0.1);
                    padding:24px;">

                    <!-- HEADER -->
                    <tr>
                        <td style="font-size:22px;font-weight:bold;color:#111827;padding-bottom:16px;">
                            Halo {{ $data['nama'] }}
                        </td>
                    </tr>

                    <!-- BODY -->
                    <tr>
                        <td style="font-size:15px;color:#374151;line-height:1.6;padding-bottom:16px;">
                            Terima kasih sudah mendaftar sebagai <strong>sineas</strong> 🎬
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-bottom:16px;">
                            <table width="100%" cellpadding="6" cellspacing="0"
                                style="border:1px solid #e5e7eb;border-radius:6px;">
                                <tr>
                                    <td style="font-weight:bold;width:140px;">Email</td>
                                    <td>{{ $data['email'] }}</td>
                                </tr>
                                <tr style="background:#f9fafb;">
                                    <td style="font-weight:bold;">No HP</td>
                                    <td>{{ $data['no_hp'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold;">Ketersediaan</td>
                                    <td>{{ ucfirst($data['ketersediaan']) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-size:14px;color:#374151;">
                            Kami akan menghubungi kalian secepatnya.
                            <br><br>
                            Terima kasih,<br>
                            <strong>{{ config('app.name') }}</strong>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
