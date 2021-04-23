$(document).ready(function () {
    $("#ccnum").keyup(function () {
        var _length = $(this).val().length;
        var _bin = $(this).val();
        var tutar = $("#tutar").val();
        if (_length == 6) {
            $.ajax({
                url: 'api/bin.php?bin=' + _bin + "&tutar=" + tutar,
                type: 'post',
                data: "",
                dataType: 'json',
                beforeSend: function () {
                },
                complete: function () {
                },
                success: function (json) {
                    console.log(json);
                    $(".oranlar").html(json.table);
                    $("#pos_id").val(json.pos_id);
                    document.getElementById("posimg").src = (json.img);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    });
    $("#ccnum").bind("paste", function (e) {
        var _length = $(this).val().length;
        var _bin    = e.originalEvent.clipboardData.getData('text');
        var tutar = $("#tutar").val();
        _bin = _bin.trim();
        _bin = _bin.substr(0, 6);
        _length = _bin.length;
        if (_length > 5) {
            $.ajax({
                url: 'api/bin.php?bin=' + _bin + "&tutar=" + tutar,
                type: 'post',
                data: "",
                dataType: 'json',
                beforeSend: function () {
                },
                complete: function () {
                },
                success: function (json) {
                    console.log(json);
                    $(".oranlar").html(json.table);
                    $("#pos_id").val(json.pos_id);
                    document.getElementById("posimg").src = (json.img);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    });
});