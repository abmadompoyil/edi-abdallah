

<html>
<head>
    <style>
        @font-face {
            font-family: 'DINNextLTArabic-Medium';
            src: url('edu/public/ArbFONTS-DINNextLTArabic-Medium-2.tff') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'DINNextLTArabic-Medium' !important;
            font-size: 10pt;
        }

        p {
            margin: 0pt;
        }

        table.items {
            border: 0.1mm solid #e7e7e7;
        }

        td {
            vertical-align: top;
        }

        .items td {
            border-left: 0.1mm solid #e7e7e7;
            border-right: 0.1mm solid #e7e7e7;
        }

        table thead td {
            text-align: center;
            border: 0.1mm solid #e7e7e7;
        }

        .items td.blanktotal {
            background-color: #EEEEEE;
            border: 0.1mm solid #e7e7e7;
            background-color: #FFFFFF;
            border: 0mm none #e7e7e7;
            border-top: 0.1mm solid #e7e7e7;
            border-right: 0.1mm solid #e7e7e7;
        }

        .items td.totals {
            text-align: right;
            border: 0.1mm solid #e7e7e7;
        }

        .items td.cost {
            text-align: "."center;
        }
    </style>
</head>

<body>
<table width="100%" style="font-family: sans-serif;" cellpadding="10">
    <tr>
        <td width="100%" style="padding: 0px; text-align: center;">
            <a href="#" target="_blank"><img src="{{asset('edu/public/logo.png')}}" width="264" height="110" alt="Logo" align="center" border="0"></a>
        </td>
    </tr>
    <tr>
        <td width="100%" style="text-align: center; font-size: 20px; font-weight: bold; padding: 0px;">
            QAD New Candidate’ Observation / evaluation/ feedback:
        </td>
    </tr>
    <tr>
        <td height="10" style="font-size: 0px; line-height: 10px; height: 10px; padding: 0px;">&nbsp;</td>
    </tr>
</table>
<table width="100%" style="font-family: sans-serif;" cellpadding="10">
    <tr>
        <td width="49%" style="border: 0.1mm solid #eee;">Name : <strong>{{$job->Teacher->name}}</strong>
            <br>Subject :<strong>{{$job->Teacher->other ??$job->Teacher->subject->name}}</strong>
            <br>Qualification : <strong>{{$job->Teacher->qualification}}</strong>
            <br> Years of Experience:<strong>{{$job->Teacher->exp()}}</strong>
            <br>Nationality : <strong>{{$job->Teacher->nationality}}</strong>
            <br>Email : <strong>{{$job->Teacher->email}}</strong>
            <br>Phone : <strong>{{$job->Teacher->phone}}</strong>
        </td>
        <td width="2%">&nbsp;</td>
        <td width="49%" style="border: 0.1mm solid #eee; text-align: right;">
          School Name :   <strong>{{$job->school->name}}</strong>
            <br> Phone  :   <strong>{{$job->school->phone}}</strong>
            <br> Email  :   <strong>{{$job->school->phone}}</strong>
    </tr>
</table>
<br>
<h3 style="text-align:center">result is : <strong>{{$job->grade()}}</strong> </h3>
<br>
<table class="items" width="100%" style="font-size: 14px; border-collapse: collapse;" cellpadding="8">
    <thead>
    <tr>
        <td width="15%" style="text-align: left;"><strong>Name </strong></td>
        <td width="45%" style="text-align: left;"><strong>Note</strong></td>
        <td width="20%" style="text-align: left;"><strong>result</strong></td>
    </tr>
    </thead>
    <tbody>
    <!-- ITEMS HERE -->
    <tr>
        <td style="padding: 0px 7px; line-height: 20px;">School Manger </td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$sManger->note }}</td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$sManger->result.'%' }}</td>
    </tr>
    <tr>
        <td style="padding: 0px 7px; line-height: 20px;">Section Manger on School </td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$secManger->note }}</td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$secManger->result.'%' }}</td>
    </tr>
    @foreach($results as $result)
    <tr>
        <td style="padding: 0px 7px; line-height: 20px;">{{$result->Super->name}} </td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$result->note }}</td>
        <td style="padding: 0px 7px; line-height: 20px;">{{$result->result.'%' }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
<br>
<table width="100%" style="font-family: sans-serif; font-size: 14px;" >
    <tr>
        <td>
            <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                </tr>
            </table>
            <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                <tr>
                    <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>The final result/strong </strong></td>
                    <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{$job->grade()}}</td>
                </tr>

            </table>
        </td>
    </tr>
</table>
<br>
<table width="100%" style="font-family: sans-serif; font-size: 14px;" >
    <br>
    <tr>
        <td>
            <table width="25%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">
{{--                        <img src="img/protected.png" alt="protected" style="display: block; margin: auto;">--}}
                    </td>
                </tr>
            </table>
            <table width="50%" align="left" style="font-family: sans-serif; font-size: 13px; text-align: center;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">
                        <strong>Recruitment of teachers for national programs </strong>
{{--                        <br>--}}
{{--                        ABC AREA--}}
{{--                        <br>--}}
{{--                        Tel: +00 000 000 0000 | Email: info@companyname.com--}}
{{--                        <br>--}}
{{--                        Company Registered in Country Name. Company Reg. 12121212.--}}
{{--                        <br>--}}
{{--                        VAT Registration No. 021021021 | ATOL No. 1234--}}
                    </td>
                </tr>
            </table>
            <table width="25%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">
{{--                        <img src="img/abtot.png" alt="abtot" style="display: block; margin: auto;">--}}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <br>
</table>
</body>
</html>
