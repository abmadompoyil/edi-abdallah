<?php $__env->startSection('content'); ?>

    

    <?php echo $__env->make('school.wdg._widget11', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">

        
        
        


        
        
        

        
        
        
        
    </div>


    <div class="row">
        <div class="col-xxl-12 order-2 order-xxl-1">
            <?php echo $__env->make('school.wdg._table', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="col-xxl-6 col-xxl-4 order-1 order-xxl-1">
            <?php echo $__env->make('school.wdg._table2', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-xxl-6 order-2 order-xxl-1">
            <?php echo $__env->make('school.wdg._table3', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>


        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-7', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-8', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
            <?php echo $__env->make('pages.widgets._widget-9', ['class' => 'card-stretch gutter-b'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
    <div class="row">

    <div class="col-xxl-12 order-1 order-xxl-1">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <?php echo e(__('CalendarListView')); ?>

                    </h3>
                </div>
                
                
                
                
                
            </div>
            <div class="card-body">
                <div id="kt_calendar"></div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>" type="text/javascript"></script>
    <script>
        var KTCalendarListView = function() {
            return {
                //main function to initiate the module
                init: function() {
                    var todayDate = moment().startOf('day');
                    var YM = todayDate.format('YYYY-MM');
                    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                    var TODAY = todayDate.format('YYYY-MM-DD');
                    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        locale : 'en',
                        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                        isRTL: KTUtil.isRTL(),
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                            lang:'ar',
                        },

                        height: 800,
                        contentHeight: 750,
                        aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                        views: {
                            dayGridMonth: { buttonText: 'Month' },
                            timeGridWeek: { buttonText: 'Week' },
                            timeGridDay: { buttonText: 'Dau' },
                            listDay: { buttonText: 'List day' },
                            listWeek: { buttonText: 'List week' }
                        },

                        defaultView: 'listWeek',
                        defaultDate: TODAY,

                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        navLinks: true,

                        events: [
                                <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            {
                                title: "<?php echo e($ev['title']); ?>",
                                start: "<?php echo e($ev['start']); ?>",
                                end:"<?php echo e($ev['end']); ?>",
                                description: "<?php echo e($ev['description']); ?>",
                                className: "fc-event-success",
                                anchor:"google.com"

                            }
                            ,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        ]
                        ,


                        eventRender: function(info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                                }
                            }
                        }
                    });

                    calendar.render();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTCalendarListView.init();
        });
    </script>
    <script src="<?php echo e(asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.1.1')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/softc92r/edu.ixmedia.tech/edu/resources/views/school/index.blade.php ENDPATH**/ ?>