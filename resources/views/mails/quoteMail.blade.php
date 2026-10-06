@php
    $r = $datas['r'];
    $rows = [
        'Full Name'        => $r->name,
        'Company Name'     => $r->company_name,
        'Business Email'   => $r->email,
        'Phone / WhatsApp' => $r->phone,
        'Country / Region' => $r->country,
    ];
    $orderRows = [
        'Product Category'       => $r->product_category,
        'Estimated Order Volume' => $r->order_volume,
        'Brief & Order'          => $r->brief_order ?: 'N/A',
    ];
    $prefDate = $r->preferred_date ? \Carbon\Carbon::parse($r->preferred_date)->format('d M, Y') : 'N/A';
    $prefTime = $r->preferred_time ? \Carbon\Carbon::parse($r->preferred_time)->format('h:i A') : 'N/A';
    $phoneDigits = preg_replace('/[^0-9]/', '', (string) $r->phone);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Quotation Request - {{ general()->title }}</title>
</head>
<body style="margin:0;padding:0;background-color:#eef1f6;font-family:'Segoe UI',Arial,Helvetica,sans-serif;-webkit-font-smoothing:antialiased;">

<!-- Preheader (inbox preview text) -->
<div style="display:none;max-height:0;overflow:hidden;opacity:0;color:transparent;">
    New quotation request from {{ $r->name }} ({{ $r->company_name }}) &mdash; {{ $r->product_category }}, {{ $r->order_volume }}.
</div>

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eef1f6;">
    <tr>
        <td align="center" style="padding:32px 12px;">

            <table role="presentation" width="640" cellpadding="0" cellspacing="0" border="0" style="width:100%;max-width:640px;background-color:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 6px 24px rgba(16,30,70,0.08);">

                <!-- Logo bar -->
                <tr>
                    <td align="center" style="padding:24px 32px;background-color:#ffffff;border-bottom:1px solid #edf0f5;">
                        <img src="{{ URL::asset(general()->logo()) }}" alt="{{ general()->title }}" width="170" style="display:block;max-width:170px;height:auto;border:0;">
                    </td>
                </tr>

                <!-- Hero -->
                <tr>
                    <td style="background-color:#16285a;background-image:linear-gradient(135deg,#16285a 0%,#243a7a 100%);padding:34px 32px;border-bottom:4px solid #e03a55;">
                        <p style="margin:0 0 8px;font-size:12px;letter-spacing:2px;text-transform:uppercase;color:#f3a6b3;font-weight:600;">New Lead &middot; Website Enquiry</p>
                        <h1 style="margin:0 0 10px;font-size:26px;line-height:1.3;color:#ffffff;font-weight:700;">New Quotation Request</h1>
                        <p style="margin:0;font-size:14px;line-height:1.6;color:#c9d2ea;">
                            <strong style="color:#ffffff;">{{ $r->name }}</strong> from <strong style="color:#ffffff;">{{ $r->company_name }}</strong> has requested a quotation via the website.
                        </p>
                    </td>
                </tr>

                <!-- Highlight cards -->
                <tr>
                    <td style="padding:28px 32px 8px;">
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="50%" valign="top" style="padding-right:8px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f5f7fb;border-radius:8px;border-left:4px solid #16285a;">
                                        <tr><td style="padding:14px 16px;">
                                            <p style="margin:0 0 4px;font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#7a8499;">Product Category</p>
                                            <p style="margin:0;font-size:16px;font-weight:700;color:#16285a;">{{ $r->product_category }}</p>
                                        </td></tr>
                                    </table>
                                </td>
                                <td width="50%" valign="top" style="padding-left:8px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#fdf2f4;border-radius:8px;border-left:4px solid #e03a55;">
                                        <tr><td style="padding:14px 16px;">
                                            <p style="margin:0 0 4px;font-size:11px;letter-spacing:1px;text-transform:uppercase;color:#7a8499;">Order Volume</p>
                                            <p style="margin:0;font-size:16px;font-weight:700;color:#e03a55;">{{ $r->order_volume }}</p>
                                        </td></tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Client information -->
                <tr>
                    <td style="padding:20px 32px 0;">
                        <h3 style="margin:0 0 12px;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:#16285a;border-bottom:2px solid #edf0f5;padding-bottom:8px;">Client Information</h3>
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="font-size:14px;">
                            @foreach($rows as $label => $value)
                            <tr>
                                <td width="40%" style="padding:9px 0;color:#7a8499;border-bottom:1px solid #f1f3f7;vertical-align:top;">{{ $label }}</td>
                                <td style="padding:9px 0;color:#1f2a44;font-weight:600;border-bottom:1px solid #f1f3f7;vertical-align:top;">
                                    @if($label == 'Business Email')
                                        <a href="mailto:{{ $value }}" style="color:#243a7a;text-decoration:none;">{{ $value }}</a>
                                    @elseif($label == 'Phone / WhatsApp')
                                        <a href="tel:{{ $value }}" style="color:#243a7a;text-decoration:none;">{{ $value }}</a>
                                    @else
                                        {{ $value }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                <!-- Order details -->
                <tr>
                    <td style="padding:24px 32px 0;">
                        <h3 style="margin:0 0 12px;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:#16285a;border-bottom:2px solid #edf0f5;padding-bottom:8px;">Order Details</h3>
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="font-size:14px;">
                            @foreach($orderRows as $label => $value)
                            <tr>
                                <td width="40%" style="padding:9px 0;color:#7a8499;border-bottom:1px solid #f1f3f7;vertical-align:top;">{{ $label }}</td>
                                <td style="padding:9px 0;color:#1f2a44;font-weight:600;border-bottom:1px solid #f1f3f7;vertical-align:top;">{{ $value }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                <!-- Preferred meeting -->
                <tr>
                    <td style="padding:24px 32px 0;">
                        <h3 style="margin:0 0 12px;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:#16285a;border-bottom:2px solid #edf0f5;padding-bottom:8px;">Preferred Consultation Schedule</h3>
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="background-color:#16285a;color:#ffffff;font-size:13px;font-weight:600;padding:9px 16px;border-radius:6px;">&#128197;&nbsp; {{ $prefDate }}</td>
                                <td width="10"></td>
                                <td style="background-color:#e03a55;color:#ffffff;font-size:13px;font-weight:600;padding:9px 16px;border-radius:6px;">&#128339;&nbsp; {{ $prefTime }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Message -->
                <tr>
                    <td style="padding:24px 32px 0;">
                        <h3 style="margin:0 0 12px;font-size:14px;letter-spacing:1px;text-transform:uppercase;color:#16285a;border-bottom:2px solid #edf0f5;padding-bottom:8px;">Message / Project Brief</h3>
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f5f7fb;border-radius:8px;">
                            <tr><td style="padding:16px 18px;font-size:14px;line-height:1.7;color:#3b4560;">
                                @if($r->message)
                                    {!! nl2br(e($r->message)) !!}
                                @else
                                    <span style="color:#9aa3b5;font-style:italic;">No message provided.</span>
                                @endif
                            </td></tr>
                        </table>
                    </td>
                </tr>

                <!-- Action buttons -->
                <tr>
                    <td align="center" style="padding:30px 32px 32px;">
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td style="border-radius:6px;background-color:#16285a;">
                                    <a href="mailto:{{ $r->email }}?subject={{ rawurlencode('Re: Your Quotation Request - '.general()->title) }}" style="display:inline-block;padding:12px 24px;font-size:14px;font-weight:600;color:#ffffff;text-decoration:none;">Reply to Client</a>
                                </td>
                                @if($phoneDigits)
                                <td width="12"></td>
                                <td style="border-radius:6px;background-color:#25d366;">
                                    <a href="https://wa.me/{{ $phoneDigits }}" style="display:inline-block;padding:12px 24px;font-size:14px;font-weight:600;color:#ffffff;text-decoration:none;">WhatsApp</a>
                                </td>
                                @endif
                            </tr>
                        </table>
                        <p style="margin:14px 0 0;font-size:12px;color:#9aa3b5;">Submitted on {{ now()->format('d M, Y \a\t h:i A') }}</p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color:#0f1d44;padding:24px 32px;text-align:center;">
                        <p style="margin:0 0 6px;font-size:14px;font-weight:700;color:#ffffff;">{{ general()->title }}</p>
                        @if(general()->address_one)
                        <p style="margin:0 0 6px;font-size:12px;line-height:1.6;color:#9fabc9;">{!! strip_tags(general()->address_one, '<br>') !!}</p>
                        @endif
                        <p style="margin:0 0 10px;font-size:12px;color:#9fabc9;">
                            @if(general()->email)<a href="mailto:{{ general()->email }}" style="color:#f3a6b3;text-decoration:none;">{{ general()->email }}</a>@endif
                            @if(general()->email && general()->mobile) &nbsp;|&nbsp; @endif
                            @if(general()->mobile){{ general()->mobile }}@endif
                            @if(general()->website) &nbsp;|&nbsp; <a href="{{ general()->website }}" style="color:#f3a6b3;text-decoration:none;">{{ preg_replace('#^https?://#', '', rtrim(general()->website, '/')) }}</a>@endif
                        </p>
                        <p style="margin:0;font-size:11px;color:#6f7ba0;">This email was generated automatically from the &ldquo;Get A Quote&rdquo; form on your website.</p>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
