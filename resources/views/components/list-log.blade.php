<div class="mt-container mx-auto">
    <div class="timeline-line">
        @if(!empty($logs) && !$logs->isEmpty())
            @foreach($logs as $log)
                <div class="item-timeline">
                    <p class="t-time">{{@$log['created_at']}}</p>
                    <div class="t-dot t-dot-primary">
                    </div>
                    <div class="t-text">
                        <p>Bản ghi này được <strong>{{@$log['type']['name']}}</strong> bởi <strong @if(@$log['guard'] === 'client') class="text-danger" @else class="text-success"  @endif>{{@$log['created_by']->email}}</strong></p>
                        <a href="javascript:void(0)" onclick="show_log('{{$log['id']}}')" class="t-meta-time">Chi tiết</a>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <div class="alert alert-warning fw-bold mb-0" role="alert">
                Không tìm thấy thông tin thay đổi.
            </div>
        @endif
    </div>
</div>

<script>
    function show_log(id){
        let _url = '{{route($router_current_name, ['cmd' => 'get_log_detal'])}}'
        _url = setUrlParameters(_url, 'id', id)
        return _SHOW_FORM_REMOTE(_url.href, 'log_modal')
    }
</script>
