<div ng-controller="profileController">
<div class="row">
    <div class="col">
        <div class="card min-h">
            <div class="card-header text-center" style="background-color: #5c6873">
               نمایش کاربران
            </div>
            <div class="card-body">
                <div class="container">
                    <table  class="table table-striped" >
                        <thead>
                        <tr>
                            <th >شناسه</th>
                            <th  >نام</th>
                            <th  >نام خانوادگی</th>
                            <th  >مدرک</th>
                            <th >حذف</th>
                            <th >ویرایش</th>
                        </tr>
                        </thead>
                        <tbody ng-submit="getProfiles">
                        <tr ng-repeat="profile in profiles track by $index">
                            <td >@{{ $index+1 }}</td>
                            <td >@{{profile.name}}</td>
                            <td > <a class="nav-link" ng-click="changeTab('showTab', profile.id)" href="#">
                                    <p scope="row"> @{{profile.lastname}}</p></a></td>
                            <td> @{{profile.madrak}}</td>

                            <td class="table-buttons text-center" >
                                <button confirmed-click="delete(profile.id)" ng-confirm-click="از حذف این مورد مطمئن هستید ؟"
                                        class="btn btn-outline-danger btn-sm"
                                        data-title="Delete" data-toggle="modal"
                                        data-target="#delete" title="حذف">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>

                            <td class="table-buttons text-center">
                                <button ng-click="changeTab('editTab' , profile.id )"
                                        class="btn btn-outline-primary btn-sm"
                                        data-title="edit" data-toggle="modal" title="ویرایش">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>