<div ng-controller="profileController">
    <style>
        #aaa{font-size: x-large;
              color:#1fc8e3}
        #aa{font-size: x-large;}
    </style>
    <div class="row">
        <div class="col">
            <div class="card min-h-300">
                <div class="card-header text-center" style="background-color: #5c6873">
                    نمایش درس
                </div>
                <tbody ng-submit="show">
                <div class="card-body">
                    <div id="aa">
                        <div><samp id="aaa">نام:</samp>@{{name}}</div>
                        <div><samp id="aaa">نام خانوادگی:</samp>@{{lastname}}</div>
                        <div><samp id="aaa">جنسیت:</samp>@{{gnsiat}}</div>
                        <div><samp id="aaa">مدرک:</samp>@{{madrak}}</div>
                        <div><samp id="aaa">درباره من</samp> @{{aboutme}}</div>
                        <div><samp id="aaa">مهارتها و دوره ها</samp>@{{doreh}}</div>
                    </div>
                </div>
                </tbody>
            </div>
        </div>
    </div>
</div>
