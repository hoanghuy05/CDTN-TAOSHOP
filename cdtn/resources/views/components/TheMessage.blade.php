<div class="m-message">
    <div class="ms-mesage-box">
        <div class="close-button mi mi-24 mi-close"></div>
        <div class="message-header">
            <div class="content">
                <div class="icon-message">
                    <div class="mi mi-52 mi-exclamation-error-48-2"></div>
                </div>
                <div class="message-content p-l-16">
                    <div class="message-title">
                        Xóa khách hàng
                    </div>

                    <span class="message-main" id="idMessage">
                        Bạn có chắc chắn muốn xóa
                    </span>
                </div>
            </div>
        </div>
        <div class="mess-footer">
            <div class="float-right mess-footer-box ">
                <form id="deleteForm" data-url>
                    @csrf
                    <button type="Submit" class="btn w-100 btn-danger pointer delete-confirmation">
                        <div class="btn-text">Xóa khách hàng</div>
                    </button>
                </form>
            </div>
            <div class="float-right mess-footer-box">
                <button class="ms-button btn btn-secondary close-message">Không</button>
            </div>
        </div>
    </div>
</div>
