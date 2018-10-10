function getExpVal(expVal) {
    var exp = '0';
    switch (expVal) {
        case '0':
            exp = Math.floor(Math.random() * 10) + 1;
            break;
        case '1/8':
            exp = '25';
            break;
        case '1/4':
            exp = '50';
            break;
        case '1/2':
            exp = '100';
            break;
        case '1':
            exp = '200';
            break;
        case '2':
            exp = '450';
            break;
        case '3':
            exp = '700';
            break;
        case '4':
            exp = '1100';
            break;
        case '5':
            exp = '1800';
            break;
        case '6':
            exp = '2300';
            break;
        case '7':
            exp = '2900';
            break;
        case '8':
            exp = '3900';
            break;
        case '9':
            exp = '5000';
            break;
        case '10':
            exp = '5900';
            break;
        case '11':
            exp = '7200';
            break;
        case '12':
            exp = '8400';
            break;
        case '13':
            exp = '10000';
            break;
        case '14':
            exp = '11500';
            break;
        case '15':
            exp = '13000';
            break;
        case '16':
            exp = '15000';
            break;
        case '17':
            exp = '18000';
            break;
        case '18':
            exp = '20000';
            break;
        case '19':
            exp = '22000';
            break;
        case '20':
            exp = '25000';
            break;
        case '21':
            exp = '33000';
            break;
        case '22':
            exp = '41000';
            break;
        case '23':
            exp = '50000';
            break;
        case '24':
            exp = '62000';
            break;
        case '25':
            exp = '-';
            break;
        case '26':
            exp = '-';
            break;
        case '30':
            exp = '155000';
            break;
        default:
            exp = '';
    }

    return exp + ' exp';
}