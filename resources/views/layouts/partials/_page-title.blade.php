<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="{{ url()->previous() }}">
                <button type="button" class="btn btn-default waves-effect waves-light">
                    Back <span class="m-l-5"><i class="fa fa-arrow-left"></i></span>
                </button>
            </a>
        </div>

        <h4 class="page-title">{{ empty($data['page-title']) ? 'Dashboard' : $data['page-title']  }}</h4>
        <ol class="breadcrumb">
            <li>
                <a href="#">{{ empty($data['menu']) ? 'Menu' : $data['menu']  }}</a>
            </li>
            <li>
                <a href="#">{{ empty($data['submenu']) ? 'Sub-Menu' : $data['submenu']  }}</a>
            </li>
            <li class="active">
                {{ empty($data['active']) ? 'Dashboard' : $data['active']  }}
            </li>
        </ol>
    </div>
</div>
