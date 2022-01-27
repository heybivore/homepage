$('#certification').change(function(){
    var opt = $(this).val();
    if (opt=="default"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2,#VRU-1,#CHO-1,#CHO-2,#CHO-3,#CHO-4,#CHO-5,#CHO-6,#CHO-7,#CMO-BB-1,#CADO-OP-1,#CAO-1,#CASSO-1,#CASSO-2,#CEE-1,#CEO-1,#CEO-2,#CEO-3,#CEO-4,#CEO-5,#CEO-6,#CHLURU-1,#CPDC-1').collapse('hide');
    } else if (opt=="CDRRMO-1"){
        $(current).collapse('hide');
        $('#req-label,#CDRRMO-1').collapse('show');
    } else if (opt=="CAGO-1"){
        $('#CDRRMO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CAGO-1').collapse('show');
    } else if (opt=="Central911-1"){
        $('#CDRRMO-1,#CAGO-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#Central911-1').collapse('show');
    } else if (opt=="CLO-1"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CLO-1').collapse('show');
    } else if (opt=="CENRO-1"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CENRO-1').collapse('show');
    } else if (opt=="CENRO-2"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CENRO-2').collapse('show');
    } else if (opt=="CENRO-3"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CENRO-3').collapse('show');
    } else if (opt=="CENRO-4"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CENRO-4').collapse('show');
    } else if (opt=="CENRO-5"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#DCTRCDD-1,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CENRO-5').collapse('show');
    } else if (opt=="DCTRCDD-1"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#CMO-CRD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#DCTRCDD-1').collapse('show');
    } else if (opt=="CMO-CRD-1"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-2').collapse('hide');
        $('#req-label,#CMO-CRD-1').collapse('show');
    }  else if (opt=="CMO-CRD-2"){
        $('#CDRRMO-1,#CAGO-1,#Central911-1,#CLO-1,#CENRO-1,#CENRO-2,#CENRO-3,#CENRO-4,#CENRO-5,#DCTRCDD-1,#CMO-CRD-1').collapse('hide');
        $('#CMO-CRD-2').collapse('show');
    }
});