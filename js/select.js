function ville() {
    
    let EN = new Array("Maroua", "Kousserie", "Poumpoumré");
    let AD = new Array("Ngaroundéré");
    let CE = new Array("Yaoundé");
    let LT = new Array("Douala", "Nkongsamba", "Loum", "Melong", "Mandjo");
    let OU = new Array("Bafoussam", "Dschang", "Bagangthé", "Baham", "Mbouda");
    let NO = new Array("Bamenda");
    let SO = new Array("Buéa", "Kribi", "Limbé");
    let N = new Array("Garoua");
    let ES = new Array("Bertoua", "Garoua-Boulaï", "Grand-Boulaï", "Petit-Boulaï");
    let SU = new Array("Eboloawa", "Sangmélima");

    let region = document.getElementById("select1").value;
    let ville = document.getElementById("select2");
    let villeOption = new Array(new Option());

    for (i = 0; i <= ville.length + 2; i++) {
        // console.log(ville.length);
        ville.remove(0);
    }

    switch (region) {

        case "Adamaoua":

            ville.remove(0);
            for (i = 0; i < AD.length; i++) {
                villeOption[i] = new Option(AD[i], AD[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Centre":
            ville.remove(0);
            for (i = 0; i < CE.length; i++) {
                villeOption[i] = new Option(CE[i], CE[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Est":
            ville.remove(0);
            for (i = 0; i < ES.length; i++) {
                villeOption[i] = new Option(ES[i], ES[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Extrème nord":
            ville.remove(0);
            for (i = 0; i < EN.length; i++) {
                villeOption[i] = new Option(EN[i], EN[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Littoral":
            ville.remove(0);
            for (i = 0; i < LT.length; i++) {
                villeOption[i] = new Option(LT[i], LT[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Nord":
            ville.remove(0);
            for (i = 0; i < N.length; i++) {
                villeOption[i] = new Option(N[i], N[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Nord-Ouest":
            ville.remove(0);
            for (i = 0; i < NO.length; i++) {
                villeOption[i] = new Option(NO[i], NO[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Ouest":
            ville.remove(0);
            for (i = 0; i < OU.length; i++) {
                villeOption[i] = new Option(OU[i], OU[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Sud":
            ville.remove(0);
            for (i = 0; i < SU.length; i++) {
                villeOption[i] = new Option(SU[i], SU[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        case "Sud-Ouest":
            ville.remove(0);
            for (i = 0; i < SO.length; i++) {
                villeOption[i] = new Option(SO[i], SO[i], "false", "false");
                ville.options.add(villeOption[i]);
            }
            break;

        default:
            ville.remove(0);
            break;

    }
}