<div class="modal_log_modal" id="log_modal">
    <div class="modal-header">
        <h5 class="modal-title">Chi tiết thay đổi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form id="send-data" class="g-3 row">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="summary layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <div class="order-summary mt-5">
                                    <div class="summary-list summary-income">
                                        <div class="info row">
                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6" style="border-right: 1px solid #CCCCCC	 ">
                                                <h5 class="text-center text-danger">Trước khi thay đổi</h5>
                                                <div class="form-group mt-4">
                                                    <div style="white-space: pre-wrap;word-wrap: break-word;">{{ json_encode(@$log['before'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                                                <h5 class="text-center text-danger">Sau khi thay đổi</h5>
                                                <div class="form-group mt-4">
                                                    <div class="switch form-switch-custom switch-inline form-switch-success mt-1">
                                                        <div style="white-space: pre-wrap;word-wrap: break-word;">{{ json_encode(@$log['after'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK) }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
