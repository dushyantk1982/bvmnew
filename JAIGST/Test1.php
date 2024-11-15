<style type="text/css">
 body {
        width: 100%;
        height: 50%;
        margin: 0;
        padding: 0;
        /*background-color: #FAFAFA;*/
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 1px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 10px;
        border: 1px red solid;
        height: 100mm;
        /*outline: 1cm #FFEAEA solid;*/
    }
    
    @page {
        /*size:8.5in 5.5in*/
		size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 100mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<div class="book">
    <div class="page">
        <div class="subpage">Page 1/2</div>    
    </div>
    <div class="page">
        <div class="subpage">Page 2/2</div>    
    </div>
</div>

