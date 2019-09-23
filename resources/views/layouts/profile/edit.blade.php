<div ng-controller="profileController">
<div class="row">
    <div class="col">
        <div class="card min-h">
            <div class="card-header text-center" style="background-color: #5c6873">ویرایش اطلاعات</div>
            <div class="card-body">
                <form ng-submit="edit()" class="form-inline">
                    <div style="align-items: center;margin-left: 2px" class=" mb-3">
                        <input type="text" ng-model="name" class="form-control"
                               placeholder="نام">
                    </div>
                    <div style="align-items: center;margin-left: 2px" class=" mb-3">
                        <input type="text" ng-model="lastname" class="form-control"
                               placeholder="نام خانوادگی">
                    </div>
                    <div style="align-items: center;margin-left: 2px" class=" mb-3">
                        <input type="text" ng-model="gnsiat" class="form-control"
                               placeholder="جنسیت">
                    </div>
                    <div style="align-items: center" class=" mb-3">
                        <input type="text" ng-model="madrak" class="form-control"
                               placeholder="مدرک">
                    </div>
                    <div style="align-items: center;margin-bottom: 15px" class="col-md-11" >

                        <textarea ng-model="aboutme" style="width: 100%" rows="5"
                                  placeholder="درباره من">
                        </textarea>
                    </div>
                    <div style="align-items: center;margin-bottom: 15px" class="col-md-11" >
                        <textarea ng-model="doreh" style="width: 100%" rows="10" class="description ckeditor"
                                  placeholder="مهارتها و دوره ها">
                        </textarea>
                    </div>
                    <div  class="col-xl-6">
                    <button class="btn btn-primary" type="submit"
                            id="button-add">ویرایش
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
