<?php

namespace Knyaz71\Geo\Database\Seeds;

use Schema;
use Knyaz71\Geo\App\Models\GeoCountry;

class Country
{
    public $output;

    public function __construct($output)
    {
        $this->output = $output;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = (new GeoCountry())->getTable();

        if(!Schema::hasTable($table)) {
            $this->output->error('Таблица "'.$table.'" не существует');
        }
        else{
			$dataList = [
				['iso2'=>'AB',	'iso3'=>'ABH',	'isoN'=>'895',	'gost7_67'=>'',		'flag'=>'ab',	'name'=>'Абхазия',					'nameFull' => 'Абхазия',],
				['iso2'=>'AU',	'iso3'=>'AUS',	'isoN'=>'036',	'gost7_67'=>'АВС',	'flag'=>'au',	'name'=>'Австралия',				'nameFull' => 'Содружество Австралии',],
				['iso2'=>'AT',	'iso3'=>'AUT',	'isoN'=>'040',	'gost7_67'=>'АВТ',	'flag'=>'at',	'name'=>'Австрия',					'nameFull' => 'Австрийская Республика',],
				['iso2'=>'AZ',	'iso3'=>'AZE',	'isoN'=>'031',	'gost7_67'=>'АЗЕ',	'flag'=>'az',	'name'=>'Азербайджан',				'nameFull' => 'Азербайджанская Республика',],
				['iso2'=>'AX',	'iso3'=>'ALA',	'isoN'=>'248',	'gost7_67'=>'',		'flag'=>'ax',	'name'=>'Аландские острова',		'nameFull' => '',],
				['iso2'=>'AL',	'iso3'=>'ALB',	'isoN'=>'008',	'gost7_67'=>'АЛБ',	'flag'=>'al',	'name'=>'Албания',					'nameFull' => 'Республика Албания',],
				['iso2'=>'DZ',	'iso3'=>'DZA',	'isoN'=>'012',	'gost7_67'=>'АЛЖ',	'flag'=>'dz',	'name'=>'Алжир',					'nameFull' => 'Алжирская Народная Демократическая Республика',],
				['iso2'=>'AS',	'iso3'=>'ASM',	'isoN'=>'016',	'gost7_67'=>'ВОС',	'flag'=>'as',	'name'=>'Американское Самоа',		'nameFull' => '',],
				['iso2'=>'AI',	'iso3'=>'AIA',	'isoN'=>'660',	'gost7_67'=>'АНА',	'flag'=>'ai',	'name'=>'Ангилья',					'nameFull' => 'Ангилья',],
				['iso2'=>'AO',	'iso3'=>'AGO',	'isoN'=>'024',	'gost7_67'=>'АНГ',	'flag'=>'ao',	'name'=>'Ангола',					'nameFull' => 'Республика Ангола',],
				['iso2'=>'AD',	'iso3'=>'AND',	'isoN'=>'020',	'gost7_67'=>'АНД',	'flag'=>'ad',	'name'=>'Андорра',					'nameFull' => 'Княжество Андорра',],
				['iso2'=>'AQ',	'iso3'=>'ATA',	'isoN'=>'010',	'gost7_67'=>'АНК',	'flag'=>'aq',	'name'=>'Антарктида',				'nameFull' => '',],
				['iso2'=>'AG',	'iso3'=>'ATG',	'isoN'=>'028',	'gost7_67'=>'АНР',	'flag'=>'ag',	'name'=>'Антигуа и Барбуда',		'nameFull' => 'Антигуа и Барбуда',],
				['iso2'=>'AR',	'iso3'=>'ARG',	'isoN'=>'032',	'gost7_67'=>'АРГ',	'flag'=>'ar',	'name'=>'Аргентина',				'nameFull' => '',],
				['iso2'=>'AM',	'iso3'=>'ARM',	'isoN'=>'051',	'gost7_67'=>'АРМ',	'flag'=>'am',	'name'=>'Армения',					'nameFull' => '',],
				['iso2'=>'AW',	'iso3'=>'ABW',	'isoN'=>'533',	'gost7_67'=>'АРУ',	'flag'=>'aw',	'name'=>'Аруба',					'nameFull' => '',],
				['iso2'=>'AF',	'iso3'=>'AFG',	'isoN'=>'004',	'gost7_67'=>'АФГ',	'flag'=>'af',	'name'=>'Афганистан',				'nameFull' => '',],
				['iso2'=>'BS',	'iso3'=>'BHS',	'isoN'=>'044',	'gost7_67'=>'БАГ',	'flag'=>'bs',	'name'=>'Багамские острова',		'nameFull' => '',],
				['iso2'=>'BD',	'iso3'=>'BGD',	'isoN'=>'050',	'gost7_67'=>'БАН',	'flag'=>'bd',	'name'=>'Бангладеш',				'nameFull' => '',],
				['iso2'=>'BB',	'iso3'=>'BRB',	'isoN'=>'052',	'gost7_67'=>'БАР',	'flag'=>'bb',	'name'=>'Барбадос',					'nameFull' => '',],
				['iso2'=>'BH',	'iso3'=>'BHR',	'isoN'=>'048',	'gost7_67'=>'БАХ',	'flag'=>'bh',	'name'=>'Бахрейн',					'nameFull' => '',],
				['iso2'=>'BZ',	'iso3'=>'BLZ',	'isoN'=>'084',	'gost7_67'=>'БЕЗ',	'flag'=>'bz',	'name'=>'Белиз',					'nameFull' => '',],
				['iso2'=>'BY',	'iso3'=>'BLR',	'isoN'=>'112',	'gost7_67'=>'БЕИ',	'flag'=>'by',	'name'=>'Белоруссия',				'nameFull' => 'Республика Беларусь',],
				['iso2'=>'BE',	'iso3'=>'BEL',	'isoN'=>'056',	'gost7_67'=>'БЕЛ',	'flag'=>'be',	'name'=>'Бельгия',					'nameFull' => '',],
				['iso2'=>'BJ',	'iso3'=>'BEN',	'isoN'=>'204',	'gost7_67'=>'БЕН',	'flag'=>'bj',	'name'=>'Бенин',					'nameFull' => '',],
				['iso2'=>'BM',	'iso3'=>'BMU',	'isoN'=>'060',	'gost7_67'=>'БЕР',	'flag'=>'bm',	'name'=>'Бермуды',					'nameFull' => '',],
				['iso2'=>'BG',	'iso3'=>'BGR',	'isoN'=>'100',	'gost7_67'=>'БОГ',	'flag'=>'bg',	'name'=>'Болгария',					'nameFull' => '',],
				['iso2'=>'BO',	'iso3'=>'BOL',	'isoN'=>'068',	'gost7_67'=>'БОЛ',	'flag'=>'bo',	'name'=>'Боливия',					'nameFull' => '',],
				['iso2'=>'BQ',	'iso3'=>'BES',	'isoN'=>'535',	'gost7_67'=>'',		'flag'=>'bq',	'name'=>'Бонэйр, Синт-Эстатиус и Саба',	'nameFull' => '',],
				['iso2'=>'BA',	'iso3'=>'BIH',	'isoN'=>'070',	'gost7_67'=>'БОС',	'flag'=>'ba',	'name'=>'Босния и Герцеговина',		'nameFull' => '',],
				['iso2'=>'BW',	'iso3'=>'BWA',	'isoN'=>'072',	'gost7_67'=>'БОТ',	'flag'=>'bw',	'name'=>'Ботсвана',					'nameFull' => '',],
				['iso2'=>'BR',	'iso3'=>'BRA',	'isoN'=>'076',	'gost7_67'=>'БРА',	'flag'=>'br',	'name'=>'Бразилия',					'nameFull' => '',],
				['iso2'=>'IO',	'iso3'=>'IOT',	'isoN'=>'086',	'gost7_67'=>'БРИ',	'flag'=>'io',	'name'=>'Британская территория в Индийском океане',	'nameFull' => '',],
				['iso2'=>'BN',	'iso3'=>'BRN',	'isoN'=>'096',	'gost7_67'=>'БРУ',	'flag'=>'bn',	'name'=>'Бруней',					'nameFull' => 'Государство Бруней-Даруссалам',],
				['iso2'=>'BV',	'iso3'=>'BVT',	'isoN'=>'074',	'gost7_67'=>'БУВ',	'flag'=>'bv',	'name'=>'Буве',						'nameFull' => 'Остров Буве',],
				['iso2'=>'BF',	'iso3'=>'BFA',	'isoN'=>'854',	'gost7_67'=>'БУК',	'flag'=>'bf',	'name'=>'Буркина-Фасо',				'nameFull' => '',],
				['iso2'=>'BI',	'iso3'=>'BDI',	'isoN'=>'108',	'gost7_67'=>'БУР',	'flag'=>'bi',	'name'=>'Бурунди',					'nameFull' => '',],
				['iso2'=>'BT',	'iso3'=>'BTN',	'isoN'=>'064',	'gost7_67'=>'БУТ',	'flag'=>'bt',	'name'=>'Бутан',					'nameFull' => '',],
				['iso2'=>'VU',	'iso3'=>'VUT',	'isoN'=>'548',	'gost7_67'=>'ВАН',	'flag'=>'vu',	'name'=>'Вануату',					'nameFull' => '',],
				['iso2'=>'VA',	'iso3'=>'VAT',	'isoN'=>'336',	'gost7_67'=>'ВАТ',	'flag'=>'va',	'name'=>'Ватикан',					'nameFull' => '',],
				['iso2'=>'GB',	'iso3'=>'GBR',	'isoN'=>'826',	'gost7_67'=>'ВЕЛ',	'flag'=>'gb',	'name'=>'Великобритания',			'nameFull' => 'Соединённое Королевство Великобритании и Северной Ирландии',],
				['iso2'=>'HU',	'iso3'=>'HUN',	'isoN'=>'348',	'gost7_67'=>'ВЕН',	'flag'=>'hu',	'name'=>'Венгрия',					'nameFull' => '',],
				['iso2'=>'VE',	'iso3'=>'VEN',	'isoN'=>'862',	'gost7_67'=>'ВЕС',	'flag'=>'ve',	'name'=>'Венесуэла',				'nameFull' => '',],
				['iso2'=>'VG',	'iso3'=>'VGB',	'isoN'=>'092',	'gost7_67'=>'ВИБ',	'flag'=>'vg',	'name'=>'Виргинские острова (Британские)',	'nameFull' => 'Виргинские острова',],
				['iso2'=>'VI',	'iso3'=>'VIR',	'isoN'=>'850',	'gost7_67'=>'ВИР',	'flag'=>'vi',	'name'=>'Виргинские острова (США)',			'nameFull' => 'Виргинские острова Соединённых Штатов',],
				['iso2'=>'TL',	'iso3'=>'TLS',	'isoN'=>'626',	'gost7_67'=>'ВОТ',	'flag'=>'tl',	'name'=>'Восточный Тимор',			'nameFull' => '',],
				['iso2'=>'VN',	'iso3'=>'VNM',	'isoN'=>'704',	'gost7_67'=>'ВЬЕ',	'flag'=>'vn',	'name'=>'Вьетнам',					'nameFull' => '',],
				['iso2'=>'GA',	'iso3'=>'GAB',	'isoN'=>'266',	'gost7_67'=>'ГАБ',	'flag'=>'ga',	'name'=>'Габон',					'nameFull' => '',],
				['iso2'=>'HT',	'iso3'=>'HTI',	'isoN'=>'332',	'gost7_67'=>'ГАИ',	'flag'=>'ht',	'name'=>'Гаити',					'nameFull' => '',],
				['iso2'=>'GY',	'iso3'=>'GUY',	'isoN'=>'328',	'gost7_67'=>'ГАЙ',	'flag'=>'gy',	'name'=>'Гайана',					'nameFull' => '',],
				['iso2'=>'GM',	'iso3'=>'GMB',	'isoN'=>'270',	'gost7_67'=>'ГАМ',	'flag'=>'gm',	'name'=>'Гамбия',					'nameFull' => '',],
				['iso2'=>'GH',	'iso3'=>'GHA',	'isoN'=>'288',	'gost7_67'=>'ГАН',	'flag'=>'gh',	'name'=>'Гана',						'nameFull' => '',],
				['iso2'=>'GP',	'iso3'=>'GLP',	'isoN'=>'312',	'gost7_67'=>'ГВА',	'flag'=>'gp',	'name'=>'Гваделупа',				'nameFull' => '',],
				['iso2'=>'GT',	'iso3'=>'GTM',	'isoN'=>'320',	'gost7_67'=>'ГВЕ',	'flag'=>'gt',	'name'=>'Гватемала',				'nameFull' => '',],
				['iso2'=>'GF',	'iso3'=>'GUF',	'isoN'=>'254',	'gost7_67'=>'ГВИ',	'flag'=>'gf',	'name'=>'Гвиана',					'nameFull' => '',],
				['iso2'=>'GN',	'iso3'=>'GIN',	'isoN'=>'324',	'gost7_67'=>'ГВН',	'flag'=>'gn',	'name'=>'Гвинея',					'nameFull' => '',],
				['iso2'=>'GW',	'iso3'=>'GNB',	'isoN'=>'624',	'gost7_67'=>'ГВЯ',	'flag'=>'gw',	'name'=>'Гвинея-Бисау',				'nameFull' => '',],
				['iso2'=>'DE',	'iso3'=>'DEU',	'isoN'=>'276',	'gost7_67'=>'ГЕР',	'flag'=>'de',	'name'=>'Германия',					'nameFull' => 'Федеративная Республика Германия',],
				['iso2'=>'GG',	'iso3'=>'GGY',	'isoN'=>'831',	'gost7_67'=>'',		'flag'=>'gg',	'name'=>'Гернси остров',			'nameFull' => '',],
				['iso2'=>'GI',	'iso3'=>'GIB',	'isoN'=>'292',	'gost7_67'=>'ГИБ',	'flag'=>'gi',	'name'=>'Гибралтар',				'nameFull' => '',],
				['iso2'=>'HN',	'iso3'=>'HND',	'isoN'=>'340',	'gost7_67'=>'ГОН',	'flag'=>'hn',	'name'=>'Гондурас',					'nameFull' => '',],
				['iso2'=>'HK',	'iso3'=>'HKG',	'isoN'=>'344',	'gost7_67'=>'ГОО',	'flag'=>'hk',	'name'=>'Гонконг',					'nameFull' => '',],
				['iso2'=>'GD',	'iso3'=>'GRD',	'isoN'=>'308',	'gost7_67'=>'ГРА',	'flag'=>'gd',	'name'=>'Гренада',					'nameFull' => '',],
				['iso2'=>'GL',	'iso3'=>'GRL',	'isoN'=>'304',	'gost7_67'=>'ГРЕ',	'flag'=>'gl',	'name'=>'Гренландия',				'nameFull' => '',],
				['iso2'=>'GR',	'iso3'=>'GRC',	'isoN'=>'300',	'gost7_67'=>'ГРИ',	'flag'=>'gr',	'name'=>'Греция',					'nameFull' => '',],
				['iso2'=>'GE',	'iso3'=>'GEO',	'isoN'=>'268',	'gost7_67'=>'ГРУ',	'flag'=>'ge',	'name'=>'Грузия',					'nameFull' => '',],
				['iso2'=>'GU',	'iso3'=>'GUM',	'isoN'=>'316',	'gost7_67'=>'ГУА',	'flag'=>'gu',	'name'=>'Гуам',						'nameFull' => '',],
				['iso2'=>'DK',	'iso3'=>'DNK',	'isoN'=>'208',	'gost7_67'=>'ДАН',	'flag'=>'dk',	'name'=>'Дания',					'nameFull' => '',],
				['iso2'=>'JE',	'iso3'=>'JEY',	'isoN'=>'832',	'gost7_67'=>'',		'flag'=>'je',	'name'=>'Джерси остров',			'nameFull' => '',],
				['iso2'=>'DJ',	'iso3'=>'DJI',	'isoN'=>'262',	'gost7_67'=>'ДЖИ',	'flag'=>'dj',	'name'=>'Джибути',					'nameFull' => '',],
				['iso2'=>'DM',	'iso3'=>'DMA',	'isoN'=>'212',	'gost7_67'=>'ДОМ',	'flag'=>'dm',	'name'=>'Доминика',					'nameFull' => '',],
				['iso2'=>'DO',	'iso3'=>'DOM',	'isoN'=>'214',	'gost7_67'=>'ДОН',	'flag'=>'do',	'name'=>'Доминиканская республика',	'nameFull' => 'Доминикана',],
				['iso2'=>'EG',	'iso3'=>'EGY',	'isoN'=>'818',	'gost7_67'=>'ЕГИ',	'flag'=>'eg',	'name'=>'Египет',					'nameFull' => '',],
				['iso2'=>'ZM',	'iso3'=>'ZMB',	'isoN'=>'894',	'gost7_67'=>'ЗАМ',	'flag'=>'zm',	'name'=>'Замбия',					'nameFull' => '',],
				['iso2'=>'EH',	'iso3'=>'ESH',	'isoN'=>'732',	'gost7_67'=>'ЗАП',	'flag'=>'eh',	'name'=>'САДР',						'nameFull' => 'Сахарская Арабская Демократическая Республика',],
				['iso2'=>'ZW',	'iso3'=>'ZWE',	'isoN'=>'716',	'gost7_67'=>'ЗИМ',	'flag'=>'zw',	'name'=>'Зимбабве',					'nameFull' => '',],
				['iso2'=>'IL',	'iso3'=>'ISR',	'isoN'=>'376',	'gost7_67'=>'ИЗР',	'flag'=>'il',	'name'=>'Израиль',					'nameFull' => '',],
				['iso2'=>'IN',	'iso3'=>'IND',	'isoN'=>'356',	'gost7_67'=>'ИНД',	'flag'=>'in',	'name'=>'Индия',					'nameFull' => '',],
				['iso2'=>'ID',	'iso3'=>'IDN',	'isoN'=>'360',	'gost7_67'=>'ИНЗ',	'flag'=>'id',	'name'=>'Индонезия',				'nameFull' => '',],
				['iso2'=>'JO',	'iso3'=>'JOR',	'isoN'=>'400',	'gost7_67'=>'ИОР',	'flag'=>'jo',	'name'=>'Иордания',					'nameFull' => '',],
				['iso2'=>'IQ',	'iso3'=>'IRQ',	'isoN'=>'368',	'gost7_67'=>'ИРК',	'flag'=>'iq',	'name'=>'Ирак',						'nameFull' => '',],
				['iso2'=>'IR',	'iso3'=>'IRN',	'isoN'=>'364',	'gost7_67'=>'ИРН',	'flag'=>'ir',	'name'=>'Иран',						'nameFull' => '',],
				['iso2'=>'IE',	'iso3'=>'IRL',	'isoN'=>'372',	'gost7_67'=>'ИРЯ',	'flag'=>'ie',	'name'=>'Ирландия',					'nameFull' => '',],
				['iso2'=>'IS',	'iso3'=>'ISL',	'isoN'=>'352',	'gost7_67'=>'ИСЛ',	'flag'=>'is',	'name'=>'Исландия',					'nameFull' => '',],
				['iso2'=>'ES',	'iso3'=>'ESP',	'isoN'=>'724',	'gost7_67'=>'ИСП',	'flag'=>'es',	'name'=>'Испания',					'nameFull' => '',],
				['iso2'=>'IT',	'iso3'=>'ITA',	'isoN'=>'380',	'gost7_67'=>'ИТА',	'flag'=>'it',	'name'=>'Италия',					'nameFull' => '',],
				['iso2'=>'YE',	'iso3'=>'YEM',	'isoN'=>'887',	'gost7_67'=>'ЙЕМ',	'flag'=>'ye',	'name'=>'Йемен',					'nameFull' => '',],
				['iso2'=>'CV',	'iso3'=>'CPV',	'isoN'=>'132',	'gost7_67'=>'КАБ',	'flag'=>'cv',	'name'=>'Кабо-Верде',				'nameFull' => '',],
				['iso2'=>'KZ',	'iso3'=>'KAZ',	'isoN'=>'398',	'gost7_67'=>'КАЗ',	'flag'=>'kz',	'name'=>'Казахстан',				'nameFull' => 'Республика Казахстан',],
				['iso2'=>'KY',	'iso3'=>'CYM',	'isoN'=>'136',	'gost7_67'=>'КАЙ',	'flag'=>'ky',	'name'=>'Кайман',					'nameFull' => 'Острова Кайман',],
				['iso2'=>'KH',	'iso3'=>'KHM',	'isoN'=>'116',	'gost7_67'=>'КАК',	'flag'=>'kh',	'name'=>'Камбоджа',					'nameFull' => '',],
				['iso2'=>'CM',	'iso3'=>'CMR',	'isoN'=>'120',	'gost7_67'=>'КАМ',	'flag'=>'cm',	'name'=>'Камерун',					'nameFull' => '',],
				['iso2'=>'CA',	'iso3'=>'CAN',	'isoN'=>'124',	'gost7_67'=>'КАН',	'flag'=>'ca',	'name'=>'Канада',					'nameFull' => '',],
				['iso2'=>'QA',	'iso3'=>'QAT',	'isoN'=>'634',	'gost7_67'=>'КАТ',	'flag'=>'qa',	'name'=>'Катар',					'nameFull' => '',],
				['iso2'=>'KE',	'iso3'=>'KEN',	'isoN'=>'404',	'gost7_67'=>'КЕН',	'flag'=>'ke',	'name'=>'Кения',					'nameFull' => '',],
				['iso2'=>'CY',	'iso3'=>'CYP',	'isoN'=>'196',	'gost7_67'=>'КИП',	'flag'=>'cy',	'name'=>'Кипр',						'nameFull' => '',],
				['iso2'=>'KI',	'iso3'=>'KIR',	'isoN'=>'296',	'gost7_67'=>'КИР',	'flag'=>'ki',	'name'=>'Кирибати',					'nameFull' => '',],
				['iso2'=>'CN',	'iso3'=>'CHN',	'isoN'=>'156',	'gost7_67'=>'КИТ',	'flag'=>'cn',	'name'=>'КНР',						'nameFull' => 'Китайская Народная Республика',],
				['iso2'=>'CC',	'iso3'=>'CCK',	'isoN'=>'166',	'gost7_67'=>'КОК',	'flag'=>'cc',	'name'=>'Кокосовые остров (Килинг)','nameFull' => 'Территория Кокосовых островов (Килинг)',],
				['iso2'=>'CO',	'iso3'=>'COL',	'isoN'=>'170',	'gost7_67'=>'КОЛ',	'flag'=>'co',	'name'=>'Колумбия',					'nameFull' => '',],
				['iso2'=>'KM',	'iso3'=>'COM',	'isoN'=>'174',	'gost7_67'=>'КОМ',	'flag'=>'km',	'name'=>'Коморы',					'nameFull' => 'Союз Коморских Островов',],
				['iso2'=>'CG',	'iso3'=>'COG',	'isoN'=>'178',	'gost7_67'=>'КОН',	'flag'=>'cg',	'name'=>'Конго (Браззавиль)',		'nameFull' => 'Республика Конго',],
				['iso2'=>'CD',	'iso3'=>'COD',	'isoN'=>'180',	'gost7_67'=>'КОО',	'flag'=>'cd',	'name'=>'Конго (Киншаса)',			'nameFull' => 'Демократическая Республика Конго',],
				['iso2'=>'CW',	'iso3'=>'CUW',	'isoN'=>'531',	'gost7_67'=>'',		'flag'=>'cw',	'name'=>'Кюрасао',					'nameFull' => '',],
				['iso2'=>'KP',	'iso3'=>'PRK',	'isoN'=>'408',	'gost7_67'=>'КОП',	'flag'=>'kp',	'name'=>'Северная Корея',			'nameFull' => 'Корейская Народно-Демократическая Республика',],
				['iso2'=>'XK',	'iso3'=>'',		'isoN'=>'914',	'gost7_67'=>'',		'flag'=>'xk',	'name'=>'Косово',					'nameFull' => 'Республика Косово',],
				['iso2'=>'CR',	'iso3'=>'CRI',	'isoN'=>'188',	'gost7_67'=>'КОС',	'flag'=>'cr',	'name'=>'Коста-Рика',				'nameFull' => 'Республика Коста-Рика',],
				['iso2'=>'CI',	'iso3'=>'CIV',	'isoN'=>'384',	'gost7_67'=>'КОТ',	'flag'=>'ci',	'name'=>'Кот-д’Ивуар',				'nameFull' => 'Республика Кот-д’Ивуар',],
				['iso2'=>'CU',	'iso3'=>'CUB',	'isoN'=>'192',	'gost7_67'=>'КУБ',	'flag'=>'cu',	'name'=>'Куба',						'nameFull' => 'Республика Куба',],
				['iso2'=>'KW',	'iso3'=>'KWT',	'isoN'=>'414',	'gost7_67'=>'КУВ',	'flag'=>'kw',	'name'=>'Кувейт',					'nameFull' => 'Государство Кувейт',],
				['iso2'=>'CK',	'iso3'=>'COK',	'isoN'=>'184',	'gost7_67'=>'КУК',	'flag'=>'ck',	'name'=>'Острова Кука',				'nameFull' => 'Острова Кука',],
				['iso2'=>'KG',	'iso3'=>'KGZ',	'isoN'=>'417',	'gost7_67'=>'КЫР',	'flag'=>'kg',	'name'=>'Киргизия',					'nameFull' => 'Кыргызская Республика',],
				['iso2'=>'LA',	'iso3'=>'LAO',	'isoN'=>'418',	'gost7_67'=>'ЛАО',	'flag'=>'la',	'name'=>'Лаос',						'nameFull' => 'Лаосская Народно-Демократическая Республика',],
				['iso2'=>'LV',	'iso3'=>'LVA',	'isoN'=>'428',	'gost7_67'=>'ЛАТ',	'flag'=>'lv',	'name'=>'Латвия',					'nameFull' => 'Латвийская Республика',],
				['iso2'=>'LS',	'iso3'=>'LSO',	'isoN'=>'426',	'gost7_67'=>'ЛЕС',	'flag'=>'ls',	'name'=>'Лесото',					'nameFull' => 'Королевство Лесото',],
				['iso2'=>'LR',	'iso3'=>'LBR',	'isoN'=>'430',	'gost7_67'=>'ЛИБ',	'flag'=>'lr',	'name'=>'Либерия',					'nameFull' => 'Республика Либерия',],
				['iso2'=>'LB',	'iso3'=>'LBN',	'isoN'=>'422',	'gost7_67'=>'ЛИВ',	'flag'=>'lb',	'name'=>'Ливан',					'nameFull' => 'Ливанская Республика',],
				['iso2'=>'LY',	'iso3'=>'LBY',	'isoN'=>'434',	'gost7_67'=>'ЛИИ',	'flag'=>'ly',	'name'=>'Ливия',					'nameFull' => 'Государство Ливия',],
				['iso2'=>'LT',	'iso3'=>'LTU',	'isoN'=>'440',	'gost7_67'=>'ЛИТ',	'flag'=>'lt',	'name'=>'Литва',					'nameFull' => '',],
				['iso2'=>'LI',	'iso3'=>'LIE',	'isoN'=>'438',	'gost7_67'=>'ЛИХ',	'flag'=>'li',	'name'=>'Лихтенштейн',				'nameFull' => '',],
				['iso2'=>'LU',	'iso3'=>'LUX',	'isoN'=>'442',	'gost7_67'=>'ЛЮК',	'flag'=>'lu',	'name'=>'Люксембург',				'nameFull' => '',],
				['iso2'=>'MU',	'iso3'=>'MUS',	'isoN'=>'480',	'gost7_67'=>'МАБ',	'flag'=>'mu',	'name'=>'Маврикий',					'nameFull' => '',],
				['iso2'=>'MR',	'iso3'=>'MRT',	'isoN'=>'478',	'gost7_67'=>'МАВ',	'flag'=>'mr',	'name'=>'Мавритания',				'nameFull' => '',],
				['iso2'=>'MG',	'iso3'=>'MDG',	'isoN'=>'450',	'gost7_67'=>'МАГ',	'flag'=>'mg',	'name'=>'Мадагаскар',				'nameFull' => 'Республика Мадагаскар',],
				['iso2'=>'MO',	'iso3'=>'MAC',	'isoN'=>'446',	'gost7_67'=>'АОМ',	'flag'=>'mo',	'name'=>'Макао',					'nameFull' => 'Аомынь (Макао)',],
				['iso2'=>'MK',	'iso3'=>'MKD',	'isoN'=>'807',	'gost7_67'=>'МАД',	'flag'=>'mk',	'name'=>'Македония',				'nameFull' => '',],
				['iso2'=>'MW',	'iso3'=>'MWI',	'isoN'=>'454',	'gost7_67'=>'МАЕ',	'flag'=>'mw',	'name'=>'Малави',					'nameFull' => '',],
				['iso2'=>'MY',	'iso3'=>'MYS',	'isoN'=>'458',	'gost7_67'=>'МАЗ',	'flag'=>'my',	'name'=>'Малайзия',					'nameFull' => '',],
				['iso2'=>'ML',	'iso3'=>'MLI',	'isoN'=>'466',	'gost7_67'=>'МАИ',	'flag'=>'ml',	'name'=>'Мали',						'nameFull' => '',],
				['iso2'=>'MV',	'iso3'=>'MDV',	'isoN'=>'462',	'gost7_67'=>'МАЛ',	'flag'=>'mv',	'name'=>'Мальдивы',					'nameFull' => 'Мальдивская Республика',],
				['iso2'=>'MT',	'iso3'=>'MLT',	'isoN'=>'470',	'gost7_67'=>'МАМ',	'flag'=>'mt',	'name'=>'Мальта',					'nameFull' => '',],
				['iso2'=>'YT',	'iso3'=>'MYT',	'isoN'=>'175',	'gost7_67'=>'МАО',	'flag'=>'yt',	'name'=>'Майотта',					'nameFull' => 'Майотта',],
				['iso2'=>'MA',	'iso3'=>'MAR',	'isoN'=>'504',	'gost7_67'=>'МАР',	'flag'=>'ma',	'name'=>'Марокко',					'nameFull' => 'Королевство Марокко',],
				['iso2'=>'MQ',	'iso3'=>'MTQ',	'isoN'=>'474',	'gost7_67'=>'МАТ',	'flag'=>'mq',	'name'=>'Мартиника',				'nameFull' => 'Мартиника',],
				['iso2'=>'MH',	'iso3'=>'MHL',	'isoN'=>'584',	'gost7_67'=>'МАШ',	'flag'=>'mh',	'name'=>'Маршалловы острова',		'nameFull' => 'Республика Маршалловы Острова',],
				['iso2'=>'MX',	'iso3'=>'MEX',	'isoN'=>'484',	'gost7_67'=>'МЕК',	'flag'=>'mx',	'name'=>'Мексика',					'nameFull' => 'Мексиканские Соединённые Штаты',],
				['iso2'=>'IM',	'iso3'=>'IMN',	'isoN'=>'833',	'gost7_67'=>'',		'flag'=>'im',	'name'=>'Мэн остров',				'nameFull' => '',],
				['iso2'=>'UM',	'iso3'=>'UMI',	'isoN'=>'581',	'gost7_67'=>'МЕЛ',	'flag'=>'um',	'name'=>'Внешние малые острова США','nameFull' => 'Внешние малые острова США',],
				['iso2'=>'FM',	'iso3'=>'FSM',	'isoN'=>'583',	'gost7_67'=>'МИК',	'flag'=>'fm',	'name'=>'Микронезия',				'nameFull' => 'Микронезия',],
				['iso2'=>'MZ',	'iso3'=>'MOZ',	'isoN'=>'508',	'gost7_67'=>'МОЗ',	'flag'=>'mz',	'name'=>'Мозамбик',					'nameFull' => 'Республика Мозамбик',],
				['iso2'=>'MD',	'iso3'=>'MDA',	'isoN'=>'498',	'gost7_67'=>'МОЛ',	'flag'=>'md',	'name'=>'Молдавия',					'nameFull' => 'Республика Молдова',],
				['iso2'=>'MC',	'iso3'=>'MCO',	'isoN'=>'492',	'gost7_67'=>'МОН',	'flag'=>'mc',	'name'=>'Монако',					'nameFull' => 'Княжество Монако',],
				['iso2'=>'MN',	'iso3'=>'MNG',	'isoN'=>'496',	'gost7_67'=>'МОО',	'flag'=>'mn',	'name'=>'Монголия',					'nameFull' => 'Монголия',],
				['iso2'=>'MS',	'iso3'=>'MSR',	'isoN'=>'500',	'gost7_67'=>'МОТ',	'flag'=>'ms',	'name'=>'Монтсеррат',				'nameFull' => 'Монтсеррат',],
				['iso2'=>'MM',	'iso3'=>'MMR',	'isoN'=>'104',	'gost7_67'=>'МЬЯ',	'flag'=>'mm',	'name'=>'Мьянма',					'nameFull' => 'Бирма',],
				['iso2'=>'NA',	'iso3'=>'NAM',	'isoN'=>'516',	'gost7_67'=>'НАМ',	'flag'=>'na',	'name'=>'Намибия',					'nameFull' => '',],
				['iso2'=>'NR',	'iso3'=>'NRU',	'isoN'=>'520',	'gost7_67'=>'НАУ',	'flag'=>'nr',	'name'=>'Науру',					'nameFull' => '',],
				['iso2'=>'NP',	'iso3'=>'NPL',	'isoN'=>'524',	'gost7_67'=>'НЕП',	'flag'=>'np',	'name'=>'Непал',					'nameFull' => '',],
				['iso2'=>'NE',	'iso3'=>'NER',	'isoN'=>'562',	'gost7_67'=>'НИА',	'flag'=>'ne',	'name'=>'Нигер',					'nameFull' => '',],
				['iso2'=>'NG',	'iso3'=>'NGA',	'isoN'=>'566',	'gost7_67'=>'НИГ',	'flag'=>'ng',	'name'=>'Нигерия',					'nameFull' => '',],
				['iso2'=>'NL',	'iso3'=>'NLD',	'isoN'=>'528',	'gost7_67'=>'НИД',	'flag'=>'nl',	'name'=>'Нидерланды',				'nameFull' => 'Королевство Нидерландов',],
				['iso2'=>'NI',	'iso3'=>'NIC',	'isoN'=>'558',	'gost7_67'=>'НИК',	'flag'=>'ni',	'name'=>'Никарагуа',				'nameFull' => 'Республика Никарагуа',],
				['iso2'=>'NU',	'iso3'=>'NIU',	'isoN'=>'570',	'gost7_67'=>'НИУ',	'flag'=>'nu',	'name'=>'Ниуэ',						'nameFull' => 'Ниуэ',],
				['iso2'=>'NZ',	'iso3'=>'NZL',	'isoN'=>'554',	'gost7_67'=>'НОЗ',	'flag'=>'nz',	'name'=>'Новая Зеландия',			'nameFull' => 'Новая Зеландия',],
				['iso2'=>'NC',	'iso3'=>'NCL',	'isoN'=>'540',	'gost7_67'=>'НОК',	'flag'=>'nc',	'name'=>'Новая Каледония',			'nameFull' => 'Новая Каледония',],
				['iso2'=>'NO',	'iso3'=>'NOR',	'isoN'=>'578',	'gost7_67'=>'НОР',	'flag'=>'no',	'name'=>'Норвегия',					'nameFull' => 'Королевство Норвегия',],
				['iso2'=>'NF',	'iso3'=>'NFK',	'isoN'=>'574',	'gost7_67'=>'НОФ',	'flag'=>'nf',	'name'=>'Норфолк',					'nameFull' => 'Остров Норфолк',],
				['iso2'=>'AE',	'iso3'=>'ARE',	'isoN'=>'784',	'gost7_67'=>'ОБЭ',	'flag'=>'ae',	'name'=>'ОАЭ',						'nameFull' => 'Объединенные Арабские Эмираты',],
				['iso2'=>'OM',	'iso3'=>'OMN',	'isoN'=>'512',	'gost7_67'=>'ОМА',	'flag'=>'om',	'name'=>'Оман',						'nameFull' => '',],
				['iso2'=>'PK',	'iso3'=>'PAK',	'isoN'=>'586',	'gost7_67'=>'ПАК',	'flag'=>'pk',	'name'=>'Пакистан',					'nameFull' => '',],
				['iso2'=>'PW',	'iso3'=>'PLW',	'isoN'=>'585',	'gost7_67'=>'ПАЛ',	'flag'=>'pw',	'name'=>'Палау',					'nameFull' => '',],
				['iso2'=>'PS',	'iso3'=>'PSE',	'isoN'=>'275',	'gost7_67'=>'',		'flag'=>'ps',	'name'=>'Палестина',				'nameFull' => '',],
				['iso2'=>'PA',	'iso3'=>'PAN',	'isoN'=>'591',	'gost7_67'=>'ПАН',	'flag'=>'pa',	'name'=>'Панама',					'nameFull' => '',],
				['iso2'=>'PG',	'iso3'=>'PNG',	'isoN'=>'598',	'gost7_67'=>'ПАП',	'flag'=>'pg',	'name'=>'Папуа — Новая Гвинея',		'nameFull' => 'Независимое Государство Папуа Новая Гвинея',],
				['iso2'=>'PY',	'iso3'=>'PRY',	'isoN'=>'600',	'gost7_67'=>'ПАР',	'flag'=>'py',	'name'=>'Парагвай',					'nameFull' => '',],
				['iso2'=>'PE',	'iso3'=>'PER',	'isoN'=>'604',	'gost7_67'=>'ПЕР',	'flag'=>'pe',	'name'=>'Перу',						'nameFull' => '',],
				['iso2'=>'PN',	'iso3'=>'PCN',	'isoN'=>'612',	'gost7_67'=>'ПИТ',	'flag'=>'pn',	'name'=>'Питкэрн',					'nameFull' => 'Острова Питкэрн',],
				['iso2'=>'PL',	'iso3'=>'POL',	'isoN'=>'616',	'gost7_67'=>'ПОЛ',	'flag'=>'pl',	'name'=>'Польша',					'nameFull' => 'Республика Польша',],
				['iso2'=>'PT',	'iso3'=>'PRT',	'isoN'=>'620',	'gost7_67'=>'ПОР',	'flag'=>'pt',	'name'=>'Португалия',				'nameFull' => 'Португальская Республика',],
				['iso2'=>'PR',	'iso3'=>'PRI',	'isoN'=>'630',	'gost7_67'=>'ПУЭ',	'flag'=>'pr',	'name'=>'Пуэрто-Рико',				'nameFull' => 'Свободно ассоциированное государство Пуэрто-Рико',],
				['iso2'=>'RE',	'iso3'=>'REU',	'isoN'=>'638',	'gost7_67'=>'РЕЮ',	'flag'=>'re',	'name'=>'Реюньон',					'nameFull' => '',],
				['iso2'=>'CX',	'iso3'=>'CXR',	'isoN'=>'162',	'gost7_67'=>'РОЖ',	'flag'=>'cx',	'name'=>'Остров Рождества',			'nameFull' => 'Остров Рождества',],
				['iso2'=>'RU',	'iso3'=>'RUS',	'isoN'=>'643',	'gost7_67'=>'РОФ',	'flag'=>'ru',	'name'=>'Россия',					'nameFull' => 'Российская Федерация',],
				['iso2'=>'RW',	'iso3'=>'RWA',	'isoN'=>'646',	'gost7_67'=>'РУА',	'flag'=>'rw',	'name'=>'Руанда',					'nameFull' => 'Республика Руанда',],
				['iso2'=>'RO',	'iso3'=>'ROU',	'isoN'=>'642',	'gost7_67'=>'РУМ',	'flag'=>'ro',	'name'=>'Румыния',					'nameFull' => 'Румыния',],
				['iso2'=>'SV',	'iso3'=>'SLV',	'isoN'=>'222',	'gost7_67'=>'САЛ',	'flag'=>'sv',	'name'=>'Сальвадор',				'nameFull' => 'Республика Эль-Сальвадор',],
				['iso2'=>'WS',	'iso3'=>'WSM',	'isoN'=>'882',	'gost7_67'=>'САМ',	'flag'=>'ws',	'name'=>'Самоа',					'nameFull' => 'Независимое Государство Самоа',],
				['iso2'=>'SM',	'iso3'=>'SMR',	'isoN'=>'674',	'gost7_67'=>'САН',	'flag'=>'sm',	'name'=>'Сан-Марино',				'nameFull' => 'Светлейшая Республика Сан-Марино',],
				['iso2'=>'ST',	'iso3'=>'STP',	'isoN'=>'678',	'gost7_67'=>'САТ',	'flag'=>'st',	'name'=>'Сан-Томе и Принсипи',		'nameFull' => 'Демократическая Республика Сан-Томе и Принсипи',],
				['iso2'=>'SA',	'iso3'=>'SAU',	'isoN'=>'682',	'gost7_67'=>'САУ',	'flag'=>'sa',	'name'=>'Саудовская Аравия',		'nameFull' => 'Королевство Саудовская Аравия',],
				['iso2'=>'SZ',	'iso3'=>'SWZ',	'isoN'=>'748',	'gost7_67'=>'СВА',	'flag'=>'sz',	'name'=>'Свазиленд',				'nameFull' => '',],
				['iso2'=>'SJ',	'iso3'=>'SJM',	'isoN'=>'744',	'gost7_67'=>'СВБ',	'flag'=>'sj',	'name'=>'Шпицберген и Ян-Майен',	'nameFull' => '',],
				['iso2'=>'SH',	'iso3'=>'SHN',	'isoN'=>'654',	'gost7_67'=>'СВЯ',	'flag'=>'sh',	'name'=>'Святая Елена',				'nameFull' => 'Острова Святой Елены, Вознесения и Тристан-да-Кунья',],
				['iso2'=>'MP',	'iso3'=>'MNP',	'isoN'=>'580',	'gost7_67'=>'СЕВ',	'flag'=>'mp',	'name'=>'Северные Марианские острова',	'nameFull' => '',],
				['iso2'=>'SC',	'iso3'=>'SYC',	'isoN'=>'690',	'gost7_67'=>'СЕЙ',	'flag'=>'sc',	'name'=>'Сейшелы',					'nameFull' => 'Республика Сейшельские Острова',],
				['iso2'=>'BL',	'iso3'=>'BLM',	'isoN'=>'652',	'gost7_67'=>'',		'flag'=>'bl',	'name'=>'Сен-Бартелеми',			'nameFull' => '',],
				['iso2'=>'MF',	'iso3'=>'MAF',	'isoN'=>'663',	'gost7_67'=>'',		'flag'=>'mf',	'name'=>'Сен-Мартен',				'nameFull' => '',],
				['iso2'=>'SM',	'iso3'=>'SPM',	'isoN'=>'666',	'gost7_67'=>'СЕП',	'flag'=>'sm',	'name'=>'Сен-Пьер и Микелон',		'nameFull' => 'Сен-Пьер и Микелон',],
				['iso2'=>'SN',	'iso3'=>'SEN',	'isoN'=>'686',	'gost7_67'=>'СЕН',	'flag'=>'sn',	'name'=>'Сенегал',					'nameFull' => '',],
				['iso2'=>'VC',	'iso3'=>'VCT',	'isoN'=>'670',	'gost7_67'=>'СЕР',	'flag'=>'vc',	'name'=>'Сент-Винсент и Гренадины',	'nameFull' => '',],
				['iso2'=>'KN',	'iso3'=>'KNA',	'isoN'=>'659',	'gost7_67'=>'СЕС',	'flag'=>'kn',	'name'=>'Сент-Китс и Невис',		'nameFull' => '',],
				['iso2'=>'LC',	'iso3'=>'LCA',	'isoN'=>'662',	'gost7_67'=>'СЕТ',	'flag'=>'lc',	'name'=>'Сент-Люсия',				'nameFull' => 'Сент-Люсия',],
				['iso2'=>'RS',	'iso3'=>'SRB',	'isoN'=>'688',	'gost7_67'=>'',		'flag'=>'rs',	'name'=>'Сербия',					'nameFull' => '',],
				['iso2'=>'SG',	'iso3'=>'SGP',	'isoN'=>'702',	'gost7_67'=>'СИН',	'flag'=>'sg',	'name'=>'Сингапур',					'nameFull' => '',],
				['iso2'=>'SX',	'iso3'=>'SXM',	'isoN'=>'534',	'gost7_67'=>'',		'flag'=>'sx',	'name'=>'Синт-Мартен',				'nameFull' => '',],
				['iso2'=>'SY',	'iso3'=>'SYR',	'isoN'=>'760',	'gost7_67'=>'СИР',	'flag'=>'sy',	'name'=>'Сирия',					'nameFull' => '',],
				['iso2'=>'SK',	'iso3'=>'SVK',	'isoN'=>'703',	'gost7_67'=>'СЛА',	'flag'=>'sk',	'name'=>'Словакия',					'nameFull' => '',],
				['iso2'=>'SI',	'iso3'=>'SVN',	'isoN'=>'705',	'gost7_67'=>'СЛО',	'flag'=>'si',	'name'=>'Словения',					'nameFull' => '',],
				['iso2'=>'US',	'iso3'=>'USA',	'isoN'=>'840',	'gost7_67'=>'СОЕ',	'flag'=>'us',	'name'=>'США',						'nameFull' => 'Соединенные Штаты Америки',],
				['iso2'=>'SB',	'iso3'=>'SLB',	'isoN'=>'090',	'gost7_67'=>'СОЛ',	'flag'=>'sb',	'name'=>'Соломоновы острова',		'nameFull' => '',],
				['iso2'=>'SO',	'iso3'=>'SOM',	'isoN'=>'706',	'gost7_67'=>'СОМ',	'flag'=>'so',	'name'=>'Сомали',					'nameFull' => '',],
				['iso2'=>'SD',	'iso3'=>'SDN',	'isoN'=>'729',	'gost7_67'=>'СУД',	'flag'=>'sd',	'name'=>'Судан',					'nameFull' => '',],
				['iso2'=>'SR',	'iso3'=>'SUR',	'isoN'=>'740',	'gost7_67'=>'СУР',	'flag'=>'sr',	'name'=>'Суринам',					'nameFull' => '',],
				['iso2'=>'SL',	'iso3'=>'SLE',	'isoN'=>'694',	'gost7_67'=>'СЬЕ',	'flag'=>'sl',	'name'=>'Сьерра-Леоне',				'nameFull' => '',],
				['iso2'=>'TJ',	'iso3'=>'TJK',	'isoN'=>'762',	'gost7_67'=>'ТАД',	'flag'=>'tj',	'name'=>'Таджикистан',				'nameFull' => '',],
				['iso2'=>'TH',	'iso3'=>'THA',	'isoN'=>'764',	'gost7_67'=>'ТАИ',	'flag'=>'th',	'name'=>'Таиланд',					'nameFull' => '',],
				['iso2'=>'TW',	'iso3'=>'TWN',	'isoN'=>'158',	'gost7_67'=>'ТАЙ',	'flag'=>'tw',	'name'=>'Тайвань',					'nameFull' => '',],
				['iso2'=>'TZ',	'iso3'=>'TZA',	'isoN'=>'834',	'gost7_67'=>'ТАН',	'flag'=>'tz',	'name'=>'Танзания',					'nameFull' => '',],
				['iso2'=>'TC',	'iso3'=>'TCA',	'isoN'=>'796',	'gost7_67'=>'ТЁР',	'flag'=>'tc',	'name'=>'Острова Тёркс и Кайкос',	'nameFull' => '',],
				['iso2'=>'TG',	'iso3'=>'TGO',	'isoN'=>'768',	'gost7_67'=>'ТОГ',	'flag'=>'tg',	'name'=>'Того',						'nameFull' => '',],
				['iso2'=>'TK',	'iso3'=>'TKL',	'isoN'=>'772',	'gost7_67'=>'ТОК',	'flag'=>'tk',	'name'=>'Токелау',					'nameFull' => 'Токелау',],
				['iso2'=>'TO',	'iso3'=>'TON',	'isoN'=>'776',	'gost7_67'=>'ТОН',	'flag'=>'to',	'name'=>'Тонга',					'nameFull' => '',],
				['iso2'=>'TT',	'iso3'=>'TTO',	'isoN'=>'780',	'gost7_67'=>'ТРИ',	'flag'=>'tt',	'name'=>'Тринидад и Тобаго',		'nameFull' => '',],
				['iso2'=>'TV',	'iso3'=>'TUV',	'isoN'=>'798',	'gost7_67'=>'ТУВ',	'flag'=>'tv',	'name'=>'Тувалу',					'nameFull' => '',],
				['iso2'=>'TN',	'iso3'=>'TUN',	'isoN'=>'788',	'gost7_67'=>'ТУН',	'flag'=>'tn',	'name'=>'Тунис',					'nameFull' => '',],
				['iso2'=>'TM',	'iso3'=>'TKM',	'isoN'=>'795',	'gost7_67'=>'ТУР',	'flag'=>'tm',	'name'=>'Туркмения',				'nameFull' => 'Туркменистан',],
				['iso2'=>'TR',	'iso3'=>'TUR',	'isoN'=>'792',	'gost7_67'=>'ТУЦ',	'flag'=>'tr',	'name'=>'Турция',					'nameFull' => '',],
				['iso2'=>'UG',	'iso3'=>'UGA',	'isoN'=>'800',	'gost7_67'=>'УГА',	'flag'=>'ug',	'name'=>'Уганда',					'nameFull' => '',],
				['iso2'=>'UZ',	'iso3'=>'UZB',	'isoN'=>'860',	'gost7_67'=>'УЗБ',	'flag'=>'uz',	'name'=>'Узбекистан',				'nameFull' => '',],
				['iso2'=>'UA',	'iso3'=>'UKR',	'isoN'=>'804',	'gost7_67'=>'УКР',	'flag'=>'ua',	'name'=>'Украина',					'nameFull' => 'Украина',],
				['iso2'=>'WF',	'iso3'=>'WLF',	'isoN'=>'876',	'gost7_67'=>'УОЛ',	'flag'=>'wf',	'name'=>'Уоллис и Футуна',			'nameFull' => '',],
				['iso2'=>'UY',	'iso3'=>'URY',	'isoN'=>'858',	'gost7_67'=>'УРУ',	'flag'=>'uy',	'name'=>'Уругвай',					'nameFull' => '',],
				['iso2'=>'FO',	'iso3'=>'FRO',	'isoN'=>'234',	'gost7_67'=>'ФАР',	'flag'=>'fo',	'name'=>'Фарерские острова',		'nameFull' => '',],
				['iso2'=>'FJ',	'iso3'=>'FJI',	'isoN'=>'242',	'gost7_67'=>'ФИД',	'flag'=>'fj',	'name'=>'Фиджи',					'nameFull' => '',],
				['iso2'=>'PH',	'iso3'=>'PHL',	'isoN'=>'608',	'gost7_67'=>'ФИЛ',	'flag'=>'ph',	'name'=>'Филиппины',				'nameFull' => '',],
				['iso2'=>'FI',	'iso3'=>'FIN',	'isoN'=>'246',	'gost7_67'=>'ФИН',	'flag'=>'fi',	'name'=>'Финляндия',				'nameFull' => '',],
				['iso2'=>'FK',	'iso3'=>'FLK',	'isoN'=>'238',	'gost7_67'=>'ФОЛ',	'flag'=>'fk',	'name'=>'Фолклендские острова',		'nameFull' => 'Фолклендские острова',],
				['iso2'=>'FR',	'iso3'=>'FRA',	'isoN'=>'250',	'gost7_67'=>'ФРА',	'flag'=>'fr',	'name'=>'Франция',					'nameFull' => '',],
				['iso2'=>'PF',	'iso3'=>'PYF',	'isoN'=>'258',	'gost7_67'=>'ФРП',	'flag'=>'pf',	'name'=>'Французская Полинезия',	'nameFull' => 'Французская Полинезия',],
				['iso2'=>'TF',	'iso3'=>'ATF',	'isoN'=>'260',	'gost7_67'=>'ФРЮ',	'flag'=>'tf',	'name'=>'Французские Южные территории',	'nameFull' => 'Французские Южные и Антарктические территории',],
				['iso2'=>'HM',	'iso3'=>'HMD',	'isoN'=>'334',	'gost7_67'=>'ХЕМ',	'flag'=>'hm',	'name'=>'Острова Херд и Макдональд','nameFull' => 'Остров Херд и острова Макдональд',],
				['iso2'=>'HR',	'iso3'=>'HRV',	'isoN'=>'191',	'gost7_67'=>'ХОР',	'flag'=>'hr',	'name'=>'Хорватия',					'nameFull' => '',],
				['iso2'=>'CF',	'iso3'=>'CAF',	'isoN'=>'140',	'gost7_67'=>'ЦЕН',	'flag'=>'cf',	'name'=>'ЦАР',						'nameFull' => 'Центральноафриканская Республика',],
				['iso2'=>'TD',	'iso3'=>'TCD',	'isoN'=>'148',	'gost7_67'=>'ЧАД',	'flag'=>'td',	'name'=>'Чад',						'nameFull' => '',],
				['iso2'=>'ME',	'iso3'=>'MNE',	'isoN'=>'499',	'gost7_67'=>'',		'flag'=>'me',	'name'=>'Черногория',				'nameFull' => '',],
				['iso2'=>'CZ',	'iso3'=>'CZE',	'isoN'=>'203',	'gost7_67'=>'ЧЕШ',	'flag'=>'cz',	'name'=>'Чехия',					'nameFull' => '',],
				['iso2'=>'CL',	'iso3'=>'CHL',	'isoN'=>'152',	'gost7_67'=>'ЧИЛ',	'flag'=>'cl',	'name'=>'Чили',						'nameFull' => 'Республика Чили',],
				['iso2'=>'CH',	'iso3'=>'CHE',	'isoN'=>'756',	'gost7_67'=>'ШВА',	'flag'=>'ch',	'name'=>'Швейцария',				'nameFull' => '',],
				['iso2'=>'SW',	'iso3'=>'SWE',	'isoN'=>'752',	'gost7_67'=>'ШВЕ',	'flag'=>'sw',	'name'=>'Швеция',					'nameFull' => '',],
				['iso2'=>'LK',	'iso3'=>'LKA',	'isoN'=>'144',	'gost7_67'=>'ШРИ',	'flag'=>'lk',	'name'=>'Шри-Ланка',				'nameFull' => 'Демократическая Социалистическая Республика Шри-Ланка',],
				['iso2'=>'EC',	'iso3'=>'ECU',	'isoN'=>'218',	'gost7_67'=>'ЭКА',	'flag'=>'ec',	'name'=>'Эквадор',					'nameFull' => 'Республика Эквадор',],
				['iso2'=>'GQ',	'iso3'=>'GNQ',	'isoN'=>'226',	'gost7_67'=>'ЭКВ',	'flag'=>'gq',	'name'=>'Экваториальная Гвинея',	'nameFull' => '',],
				['iso2'=>'ER',	'iso3'=>'ERI',	'isoN'=>'232',	'gost7_67'=>'ЭРИ',	'flag'=>'er',	'name'=>'Эритрея',					'nameFull' => '',],
				['iso2'=>'EE',	'iso3'=>'EST',	'isoN'=>'233',	'gost7_67'=>'ЭСТ',	'flag'=>'ee',	'name'=>'Эстония',					'nameFull' => '',],
				['iso2'=>'ET',	'iso3'=>'ETH',	'isoN'=>'231',	'gost7_67'=>'ЭФИ',	'flag'=>'et',	'name'=>'Эфиопия',					'nameFull' => '',],
				['iso2'=>'GS',	'iso3'=>'SGS',	'isoN'=>'239',	'gost7_67'=>'ЮЖГ',	'flag'=>'gs',	'name'=>'Южная острова Георгия и Сандвичевы',	'nameFull' => 'Южная Георгия и Южные Сандвичевы Острова',],
				['iso2'=>'ZA',	'iso3'=>'ZAF',	'isoN'=>'710',	'gost7_67'=>'ЮЖН',	'flag'=>'za',	'name'=>'ЮАР',						'nameFull' => 'Южно-Африканская Республика',],
				['iso2'=>'KR',	'iso3'=>'KOR',	'isoN'=>'410',	'gost7_67'=>'КОР',	'flag'=>'kr',	'name'=>'Южная Корея',				'nameFull' => 'Республика Корея',],
				['iso2'=>'OS',	'iso3'=>'OST',	'isoN'=>'896',	'gost7_67'=>'',		'flag'=>'os',	'name'=>'Южная Осетия',				'nameFull' => '',],
				['iso2'=>'SS',	'iso3'=>'SSD',	'isoN'=>'728',	'gost7_67'=>'',		'flag'=>'ss',	'name'=>'Южный Судан',				'nameFull' => '',],
				['iso2'=>'JM',	'iso3'=>'JAM',	'isoN'=>'388',	'gost7_67'=>'ЯМА',	'flag'=>'jm',	'name'=>'Ямайка',					'nameFull' => '',],
				['iso2'=>'JP',	'iso3'=>'JPN',	'isoN'=>'392',	'gost7_67'=>'ЯПО',	'flag'=>'jp',	'name'=>'Япония',					'nameFull' => '',],

				['iso2'=>'AN',	'iso3'=>'ANT',	'isoN'=>'530',	'gost7_67'=>'АНТ',	'flag'=>'an',	'name'=>'Антильские острова',		'nameFull' => 'Нидерландские Антильские острова',],
				['iso2'=>'EU',	'iso3'=>'',		'isoN'=>'',		'gost7_67'=>'',		'flag'=>'eu',	'name'=>'Европейский союз',			'nameFull' => '',],
				['iso2'=>'SU',	'iso3'=>'SUN',	'isoN'=>'810',	'gost7_67'=>'',		'flag'=>'su',	'name'=>'СССР',						'nameFull' => 'Союз Советских Социалистических Республик',],
				['iso2'=>'YU',	'iso3'=>'YUG',	'isoN'=>'891',	'gost7_67'=>'ЮГО',	'flag'=>'yu',	'name'=>'Югославия',				'nameFull' => 'Югославия',],
				['iso2'=>'CS',	'iso3'=>'CSK',	'isoN'=>'200',	'gost7_67'=>'',		'flag'=>'cs',	'name'=>'Чехословакия',				'nameFull' => 'Чехословакия',],
			];

			foreach ($dataList as $data) {
                GeoCountry::updateOrInsert(
						[
							'iso2' =>$data['iso2']
						],
						$data
					);
			}
		}
    }
}
