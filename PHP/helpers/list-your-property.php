<div class="list-your-property-form">
    <h2 class="page-header">List your property</h2>

    <div class="content">
        <div class="row">
            <div class="span8">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper libero sed ante auctor vel gravida nunc placerat. Suspendisse molestie posuere sem, in viverra dolor venenatis sit amet. Aliquam gravida nibh quis justo pulvinar luctus. Phasellus a malesuada massa.
                </p>
            </div><!-- /.span8 -->
        </div><!-- /.row -->

        <form method="post" action="/sample" enctype="multipart/form-data">
            <div class="row">
                <div class="span4">
                    <h3><strong>1.</strong> <span>Personal info</span></h3>

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyFirstName">
                            First name
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyFirstName">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertySurname">
                            Surname
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertySurname">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyEmail">
                            Email
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyEmail">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyPhone">
                            Phone
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyPhone">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
                </div><!-- /.span4 -->

                <div class="span4">
                    <h3><strong>2.</strong> <span>Property info</span></h3>

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyLocation">
                            Location
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyLocation">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="property-type control-group">
                        <label class="control-label" for="inputPropertyPropertyType">
                            Property type
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputPropertyPropertyType">
                                <option id="apartment1">Apartment</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="contract-type control-group">
                        <label class="control-label" for="inputPropertyContractType">
                            Contract type
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <select id="inputPropertyContractType">
                                <option id="apartment2">Rent</option>
                                <option id="apartment3">Sale</option>
                            </select>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="bedrooms control-group">
                        <label class="control-label" for="inputPropertyBedrooms">
                            Bedrooms
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyBedrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="bathrooms control-group">
                        <label class="control-label" for="inputPropertyBathrooms">
                            Bathrooms
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyBathrooms">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="area control-group">
                        <label class="control-label" for="inputPropertyArea">
                            Area
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyArea">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="price control-group">
                        <label class="control-label" for="inputPropertyPrice">
                            Price
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputPropertyPrice">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
                </div><!-- /.span4 -->

                <div class="span4">
                    <h3><strong>3.</strong> <span>Image upload</span></h3>

                    <div class="fileupload fileupload-new control-group" data-provides="fileupload">
                        <label class="control-label" for="inputPropertyPrice">
                            Image files
                        </label>

                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="icon-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" />
                                                </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div><!-- /.input-append -->
                    </div><!-- .fileupload -->

                    <div class="control-group">
                        <label class="control-label" for="inputPropertyNotes">
                            Your notes
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <textarea id="inputPropertyNotes"></textarea>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->
                </div><!-- /.span4 -->
            </div><!-- /.row -->
        </form>
    </div><!-- /.content -->
</div><!-- /.list-your-property-form -->