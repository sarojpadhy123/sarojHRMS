<?php $__env->startSection('content'); ?>


    <section>

        <div class="container-fluid"><span id="general_result"></span></div>


        <div class="container-fluid mb-3">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('store-project')): ?>
                <button type="button" class="btn btn-info" name="create_record" id="create_record"><i
                            class="fa fa-plus"></i> <?php echo e(__('Add Project')); ?></button>
            <?php endif; ?>
        </div>

        <div class="table-responsive">
            <table id="project-table" class="table ">
                <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th><?php echo e(__('Project Name')); ?></th>
                    <th><?php echo e(trans('file.Priority')); ?></th>
                    <th><?php echo e(__('Assigned Employees')); ?></th>
                    <th><?php echo e(trans('file.Client')); ?></th>
                    <th><?php echo e(__('Start Date')); ?></th>
                    <th><?php echo e(__('End Date')); ?></th>
                    <th><?php echo e(__('Progress')); ?></th>
                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                </tr>
                </thead>

            </table>
        </div>
    </section>



    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(__('Add Project')); ?></h5>
                    <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="close"><i
                                class="dripicons-cross"></i></button>
                </div>

                <span id="form_result"></span>
                <form method="post" id="sample_form" class="form-horizontal">

                    <?php echo csrf_field(); ?>
                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label><?php echo e(trans('file.Title')); ?> *</label>
                                <input type="text" name="title" id="title" required class="form-control"
                                       placeholder="<?php echo e(trans('file.Title')); ?>">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Client')); ?>*</label>
                                    <select name="client_id" id="client_id"
                                            class="form-control selectpicker dynamic"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='<?php echo e(__('Selecting',['key'=>trans('file.Client')])); ?>...'>
                                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($client->id); ?>"><?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('Start Date')); ?> *</label>
                                <input type="text" name="start_date" id="start_date" autocomplete="off" required
                                       class="form-control date"
                                       value="">
                            </div>

                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('End Date')); ?> *</label>
                                <input type="text" name="end_date" id="end_date" autocomplete="off" required
                                       class="form-control date"
                                       value="">
                            </div>

                            <div class="col-md-4 form-group">
                                <label><?php echo e(trans('file.Priority')); ?></label>
                                <select name="project_priority" id="project_priority" class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="begins"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Priority')])); ?>...'>
                                    <option value="low"><?php echo e(trans('file.Low')); ?></option>
                                    <option value="medium"><?php echo e(trans('file.Medium')); ?></option>
                                    <option value="high"><?php echo e(trans('file.High')); ?></option>
                                    <option value="highest"><?php echo e(trans('file.Highest')); ?></option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Company')); ?></label>
                                    <select name="company_id" id="company_id" class="form-control selectpicker dynamic"
                                            data-live-search="true" data-live-search-style="begins"
                                            data-first_name="first_name" data-last_name="last_name"
                                            title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>...'>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label><?php echo e(__('Assigned Employees')); ?> *</label>
                                <select name="employee_id[]" id="employee_id" class="form-control js-example-responsive"
                                        multiple="multiple">

                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Summary')); ?></label>
                                    <textarea class="form-control" id="summary"
                                              name="summary" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Description')); ?></label>
                                    <textarea class="form-control des-editor" id="description" name="description"
                                              rows="3"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                    <input type="submit" name="action_button" id="action_button"
                           class="btn btn-warning btn-block btn-lg" value=<?php echo e(trans('file.Add')); ?>>
                </form>
            </div>
        </div>
    </div>


    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(__('Edit Project')); ?></h5>
                    <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="close"><i
                                class="dripicons-cross"></i></button>
                </div>

                <span id="edit_form_result"></span>
                <form method="post" id="edit_sample_form" class="form-horizontal">

                    <?php echo csrf_field(); ?>

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label><?php echo e(trans('file.Title')); ?> *</label>
                                <input type="text" name="edit_title" id="edit_title" required
                                       class="form-control"
                                       placeholder="<?php echo e(trans('file.Title')); ?>">
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Client')); ?>*</label>
                                    <select name="edit_client_id" id="edit_client_id"
                                            class="form-control selectpicker dynamic"
                                            data-live-search="true" data-live-search-style="begins"
                                            title='<?php echo e(__('Selecting',['key'=>trans('file.Client')])); ?>...'>
                                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($client->id); ?>"><?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('Start Date')); ?> *</label>
                                <input type="text" name="edit_start_date" id="edit_start_date" autocomplete="off"
                                       required class="form-control date"
                                       value="">
                            </div>

                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('End Date')); ?> *</label>
                                <input type="text" name="edit_end_date" id="edit_end_date" autocomplete="off" required
                                       class="form-control date"
                                       value="">
                            </div>


                            <div class="col-md-6 form-group">
                                <label><?php echo e(trans('file.Priority')); ?></label>
                                <select name="edit_project_priority" id="edit_project_priority"
                                        class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="begins"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Priority')])); ?>...'>
                                    <option value="low"><?php echo e(trans('file.Low')); ?></option>
                                    <option value="medium"><?php echo e(trans('file.Medium')); ?></option>
                                    <option value="high"><?php echo e(trans('file.High')); ?></option>
                                    <option value="highest"><?php echo e(trans('file.Highest')); ?></option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label><?php echo e(trans('file.Status')); ?></label>
                                <select name="edit_project_status" id="edit_project_status"
                                        class="form-control selectpicker "
                                        data-live-search="true" data-live-search-style="begins"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Status')])); ?>...'>
                                    <option value="not_started"><?php echo e(__('Not Started')); ?></option>
                                    <option value="in_progress"><?php echo e(__('In Progress')); ?></option>
                                    <option value="completed"><?php echo e(trans('file.Completed')); ?></option>
                                    <option value="deferred"><?php echo e(trans('file.Deferred')); ?></option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Summary')); ?></label>
                                    <textarea class="form-control" id="edit_summary"
                                              name="edit_summary" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Description')); ?></label>
                                    <textarea class="form-control des-editor" id="edit_description"
                                              name="edit_description"
                                              rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 form-group show-edit">
                                <label><?php echo e(__('Progress Bar')); ?> </label>
                                <input type="text" name="edit_project_progress" id="edit_project_progress"
                                       class="form-control range-slider "
                                       placeholder="<?php echo e(__('Progress Bar')); ?>">
                            </div>

                        </div>

                    </div>
                    <input type="hidden" name="hidden_id" id="hidden_id"/>
                    <input type="submit" name="edit_action_button" id="edit_action_button"
                           class="btn btn-warning btn-block btn-lg" value=<?php echo e(trans("file.Edit")); ?>>
                </form>
            </div>
        </div>
    </div>


    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><?php echo e(trans('file.Confirmation')); ?></h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center"><?php echo e(__('Are you sure you want to remove this data?')); ?></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger"><?php echo e(trans('file.OK')); ?>'
                    </button>
                    <button type="button" class="close btn-default"
                            data-dismiss="modal"><?php echo e(trans('file.Cancel')); ?></button>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        (function($) {

            $(document).ready(function () {

                $('.js-example-responsive').select2({
                    placeholder: '<?php echo e(__('')); ?>',
                    width: 'resolve',
                    theme: "classic",
                });

                let date = $('.date');
                date.datepicker({
                    format: '<?php echo e(env('Date_Format_JS')); ?>',
                    autoclose: true,
                    todayHighlight: true
                });


                var table_table = $('#project-table').DataTable({
                    initComplete: function () {
                        this.api().columns([1]).every(function () {
                            var column = this;
                            var select = $('<select><option value=""></option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );

                                    column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });

                            column.data().unique().sort().each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                                $('select').selectpicker('refresh');
                            });
                        });
                    },
                    responsive: true,
                    fixedHeader: {
                        header: true,
                        footer: true
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "<?php echo e(route('projects.index')); ?>",
                    },

                    columns: [
                        {
                            data: null,
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'summary',
                            name: 'summary'

                        },
                        {
                            data: 'project_priority',
                            name: 'project_priority',
                        },
                        {
                            data: 'assigned_employee',
                            name: 'assigned_employee',
                            render: function (data) {
                                return data.join("<br>");
                            }
                        },
                        {
                            data: 'client',
                            name: 'client',
                        },
                        {
                            data: 'start_date',
                            name: 'start_date',
                        },
                        {
                            data: 'end_date',
                            name: 'end_date',
                        },
                        {
                            data: 'project_progress',
                            name: 'project_progress',
                            render: function (data) {
                                if (data !== null) {
                                    if (data > 70) {
                                        return data + '% complete<div class="progress"><div class="progress-bar green" role="progressbar" style="width: ' + data + '%" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100"></div></div>'
                                    } else if (data > 50) {
                                        return data + '% complete<div class="progress"><div class="progress-bar yellow" role="progressbar" style="width: ' + data + '%" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100"></div></div>'
                                    } else {
                                        return data + '% complete<div class="progress"><div class="progress-bar red" role="progressbar" style="width: ' + data + '%" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100"></div></div>'
                                    }
                                } else {
                                    return 0 + '% complete'
                                }
                            }
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        }
                    ],


                    "order": [],
                    'language': {
                        'lengthMenu': '_MENU_ <?php echo e(__("records per page")); ?>',
                        "info": '<?php echo e(trans("file.Showing")); ?> _START_ - _END_ (_TOTAL_)',
                        "search": '<?php echo e(trans("file.Search")); ?>',
                        'paginate': {
                            'previous': '<?php echo e(trans("file.Previous")); ?>',
                            'next': '<?php echo e(trans("file.Next")); ?>'
                        }
                    },
                    'columnDefs': [
                        {
                            "orderable": false,
                            'targets': [0, 7],
                        },
                        {
                            'render': function (data, type, row, meta) {
                                if (type == 'display') {
                                    data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                                }

                                return data;
                            },
                            'checkboxes': {
                                'selectRow': true,
                                'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                            },
                            'targets': [0]
                        }
                    ],


                    'select': {style: 'multi', selector: 'td:first-child'},
                    'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    dom: '<"row"lfB>rtip',
                    buttons: [
                        {
                            extend: 'pdf',
                            text: '<i title="export to pdf" class="fa fa-file-pdf-o"></i>',
                            exportOptions: {
                                columns: ':visible:Not(.not-exported)',
                                rows: ':visible'
                            },
                        },
                        {
                            extend: 'csv',
                            text: '<i title="export to csv" class="fa fa-file-text-o"></i>',
                            exportOptions: {
                                columns: ':visible:Not(.not-exported)',
                                rows: ':visible'
                            },
                        },
                        {
                            extend: 'print',
                            text: '<i title="print" class="fa fa-print"></i>',
                            exportOptions: {
                                columns: ':visible:Not(.not-exported)',
                                rows: ':visible'
                            },
                        },
                        {
                            extend: 'colvis',
                            text: '<i title="column visibility" class="fa fa-eye"></i>',
                            columns: ':gt(0)'
                        },
                    ],
                });
                new $.fn.dataTable.FixedHeader(table_table);
            });

            $(".range-slider").ionRangeSlider({
                type: "single",
                min: 0,
                max: 100,
                step: 1,
                grid: true,
                postfix: "%",
                skin: "round"
            });


            tinymce.init({
                selector: '.des-editor',
                setup: function (editor) {
                    editor.on('change', function () {
                        editor.save();
                    });
                },
                height: 130,

                image_title: true,
                /* enable automatic uploads of images represented by blob or data URIs*/
                automatic_uploads: true,
                /*
                  URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                  images_upload_url: 'postAcceptor.php',
                  here we add custom filepicker only to Image dialog
                */
                file_picker_types: 'image',
                /* and here's our custom image picker*/
                file_picker_callback: function (cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    /*
                      Note: In modern browsers input[type="file"] is functional without
                      even adding it to the DOM, but that might not be the case in some older
                      or quirky browsers like IE, so you might want to add it to the DOM
                      just in case, and visually hide it. And do not forget do remove it
                      once you do not need it anymore.
                    */

                    input.onchange = function () {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function () {
                            /*
                              Note: Now we need to register the blob in TinyMCEs image blob
                              registry. In the next release this part hopefully won't be
                              necessary, as we are looking to handle it internally.
                            */
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            /* call the callback and populate the Title field with the file name */
                            cb(blobInfo.blobUri(), {title: file.name});
                        };
                        reader.readAsDataURL(file);
                    };

                    input.click();
                },

                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code wordcount'
                ],
                toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
                branding: false
            });


            $('#create_record').on('click', function () {

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function (event) {
                event.preventDefault();

                $.ajax({
                    url: "<?php echo e(route('projects.store')); ?>",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('select').selectpicker('refresh');
                            $('.js-example-responsive').val(null).trigger('change');
                            $('#project-table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html).slideDown(300).delay(5000).slideUp(300);
                    }
                })
            });

            $('#edit_sample_form').on('submit', function (event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo e(route('projects.update')); ?>",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            setTimeout(function () {
                                $('#editModal').modal('hide');
                                $('select').selectpicker('refresh');
                                $('.js-example-responsive').val(null).trigger('change');
                                $('#project-table').DataTable().ajax.reload();
                                $('#edit_sample_form')[0].reset();
                            }, 2000);

                        }
                        $('#edit_form_result').html(html).slideDown(300).delay(5000).slideUp(300);
                    }
                });
            });


            $(document).on('click', '.edit', function () {

                var id = $(this).attr('id');
                $('#edit_form_result').html('');


                var target = "<?php echo e(route('projects.index')); ?>/" + id + '/edit';

                $.ajax({
                    url: target,
                    dataType: "json",
                    success: function (html) {

                        $('#edit_title').val(html.data.title);
                        $('#edit_project_priority').selectpicker('val', html.data.project_priority);
                        if (html.data.description) {
                            function htmlDecode(input){
                                var e = document.createElement('div');
                                e.innerHTML = input;
                                return e.childNodes.length == 0 ? "" : e.childNodes[0].nodeValue;
                            }
                            tinymce.get('edit_description').setContent(htmlDecode(html.data.description));
                        }
                        $('#edit_client_id').selectpicker('val', html.data.client_id);

                        $('#edit_start_date').val(html.data.start_date);
                        $('#edit_end_date').val(html.data.end_date);
                        if (html.data.project_status) {
                            $('#edit_project_status').selectpicker('val', html.data.project_status);
                        }
                        if (html.data.project_progress) {
                            var instance = $('#edit_project_progress').data("ionRangeSlider");
                            instance.update({
                                from: html.data.project_progress
                            });
                        }
                        $('#edit_summary').val(html.data.summary);

                        $('#hidden_id').val(html.data.id);
                        $('#editModal').modal('show');
                    }
                })
            });


            let delete_id;

            $(document).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
                $('.modal-title').text('<?php echo e(__('DELETE Record')); ?>');
                $('#ok_button').text('<?php echo e(trans('file.OK')); ?>');

            });


            $('.close').on('click', function () {
                $('#sample_form')[0].reset();
                $('#edit_sample_form')[0].reset();
                $('select').selectpicker('refresh');
                var instance = $('#edit_task_progress').data("ionRangeSlider");
                instance.update({
                    from: 0
                });
                $('#project-table').DataTable().ajax.reload();
            });

            $('#ok_button').on('click', function () {
                let target = "<?php echo e(route('projects.index')); ?>/" + delete_id + '/delete';
                $.ajax({
                    url: target,
                    beforeSend: function () {
                        $('#ok_button').text('<?php echo e(trans('file.Deleting...')); ?>');
                    },
                    success: function (data) {
                        let html = '';
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                        }
                        if (data.error) {
                            html = '<div class="alert alert-danger">' + data.error + '</div>';
                        }
                        setTimeout(function () {
                            $('#general_result').html(html).slideDown(300).delay(5000).slideUp(300);
                            $('#confirmModal').modal('hide');
                            $('#project-table').DataTable().ajax.reload();
                        }, 2000);
                    }
                })
            });


            $('.dynamic').change(function () {
                if ($(this).val() !== '') {
                    let value = $(this).val();
                    let first_name = $(this).data('first_name');
                    let last_name = $(this).data('last_name');
                    let _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "<?php echo e(route('dynamic_employee')); ?>",
                        method: "POST",
                        data: {value: value, _token: _token, first_name: first_name, last_name: last_name},
                        success: function (result) {
                            $('select').selectpicker("destroy");
                            $('#employee_id').html(result);
                            $('select').selectpicker();

                        }
                    });
                }
            });

        })(jQuery);
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\public\shariqq\black_htm\resources\views/projects/project/index.blade.php ENDPATH**/ ?>