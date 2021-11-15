

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
            <a href="#" target="_blank"><img src="<?php echo e(asset('edu/public/logo.png')); ?>" width="264" height="110" alt="Logo" align="center" border="0"></a>
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
        <td width="49%" style="border: 0.1mm solid #eee;">Name : <strong><?php echo e($job->Teacher->name); ?></strong>
            <br>Subject :<strong><?php echo e($job->Teacher->other ??$job->Teacher->subject->name); ?></strong>
            <br>Qualification : <strong><?php echo e($job->Teacher->qualification); ?></strong>
            <br> Years of Experience:<strong><?php echo e($job->Teacher->exp()); ?></strong>
            <br>Nationality : <strong><?php echo e($job->Teacher->nationality); ?></strong>
            <br>Email : <strong><?php echo e($job->Teacher->email); ?></strong>
            <br>Phone : <strong><?php echo e($job->Teacher->phone); ?></strong>
        </td>
        <td width="2%">&nbsp;</td>
        <td width="49%" style="border: 0.1mm solid #eee; text-align: right;">
          School Name :   <strong><?php echo e($job->school->name); ?></strong>
            <br> Phone  :   <strong><?php echo e($job->school->phone); ?></strong>
            <br> Email  :   <strong><?php echo e($job->school->phone); ?></strong>
    </tr>
</table>
<br>
<h3 style="text-align:center">result is : <strong><?php echo e($job->grade()); ?></strong> </h3>
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
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($sManger->note); ?></td>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($sManger->result.'%'); ?></td>
    </tr>
    <tr>
        <td style="padding: 0px 7px; line-height: 20px;">Section Manger on School </td>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($secManger->note); ?></td>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($secManger->result.'%'); ?></td>
    </tr>
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($result->Super->name); ?> </td>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($result->note); ?></td>
        <td style="padding: 0px 7px; line-height: 20px;"><?php echo e($result->result.'%'); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><?php echo e($job->grade()); ?></td>
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

                    </td>
                </tr>
            </table>
            <table width="50%" align="left" style="font-family: sans-serif; font-size: 13px; text-align: center;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">
                        <strong>Recruitment of teachers for national programs </strong>








                    </td>
                </tr>
            </table>
            <table width="25%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                <tr>
                    <td style="padding: 0px; line-height: 20px;">

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <br>
</table>
</body>
</html>
<?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/job/pdf.blade.php ENDPATH**/ ?>