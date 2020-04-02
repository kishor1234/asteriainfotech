
<section class="content-header">
    <h1>
        Job 
        <small>Post New Job</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Job Vacancies</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">

        <div class="form-group">
            <div class="col-lg-8 col-lg-offset-2">
                <div id="display" style="overflow: auto;">
                    <div class="box box-primary">
                        <div class="box-body">
                            <form id="jobPost" method="post" action="#" onsubmit="return postDataWithRedirect('<?php echo $obj->encdata("C_SaveJobPost"); ?>', '#jobPost', '#msg', '<?php echo HOSTURL . "?r=" . $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VJobList"); ?>')">
                                <div class="form-group">
                                    <label>Current Opening<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Current Opening" class="form-control" onkeypress="return onlyAlphabetswithspace(event, '');" required="" id="inputOpening" name="opening"/>
                                </div>
                                <div class="form-group">
                                    <label>No. Of Positions(Vacancies)<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="No. Of Positions (Vacancies)" onkeypress="return isNumber(event)" class="form-control" required="" id="positions" name="positions"/>
                                </div>
                                <div class="form-group">
                                    <label>Experience<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Experience" class="form-control" onkeypress="return isNumber(event)" required="" id="experience" name="experience"/>
                                </div>
                                <div class="form-group">
                                    <label>Qualification<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Qualification" class="form-control" onkeypress="return onlyAlphabetswithspace(event, '');" required="" id="qualification" name="qualification"/>
                                </div>
                                <div class="form-group">
                                    <label>Work Location<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Work Location" class="form-control"  onkeypress="return onlyAlphabetswithspace(event, '');" required="" id="work_location" name="work_location"/>
                                </div>
                                <div class="form-group">
                                    <label>AGE<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Age" class="form-control" onkeypress="return isNumber(event)" required="" id="age" name="age"/>
                                </div>
                                <div class="form-group">
                                    <label>Salary<span style="color:red;">*</span></label>
                                    <input type="text" placeholder="Salary" class="form-control" onkeypress="return isNumber(event)" required="" id="salary" name="salary"/>
                                </div>
                                <div class="form-group">
                                    <label>Summery<span style="color:red;">*</span></label>
                                    <textarea class="codemirror-textarea" placeholder="Job Summery" class="form-control" required="" id="summery"></textarea>
                                    <input type="hidden" name="summery" id="de">
                                </div>
                                <div class="form-group">

                                    <input type="submit" class="btn btn-primary" id="inputSave" value="Save Post"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- /.content -->
<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script>
                                        var edit;
                                        $("document").ready(function () {
                                            CKEDITOR.replace('summery');
                                            setInterval(updateDiv, 100);
                                            function updateDiv() {
                                                var editorText = CKEDITOR.instances.txtEditor.getData();
                                                $('#de').val(editorText);
                                            }
                                            setInterval(updateDesc, 100);
                                            
                                        });


</script>