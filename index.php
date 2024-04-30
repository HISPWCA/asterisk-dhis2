
<?php
// start Credentials
$username = '';
$password = '';
// end Credentials

// start constants
$heure_dataelement = 'QzzCrZKhZBG';
$telephone_dataelement = 'pPUNJZBYk9l';
$langues = array(
    array('id' => '1', 'value' => 'kGMgkO9wwGK', 'code' => 'Français'),
    array('id' => '2', 'value' => 'kGMgkO9wwGK', 'code' => 'Anglais'),
);
$categories = array(
    array('id' => '1', 'value' => 'hPMQ2JxMqK5', 'code' => 'AGRI'),
    array('id' => '2', 'value' => 'hPMQ2JxMqK5', 'code' => 'ENV'),
    array('id' => '3', 'value' => 'hPMQ2JxMqK5', 'code' => 'HUM'),
);
$type_fievres = array(
    array('id' => '1', 'value' => 'Visa6TWdx9L', 'code' => 'true'),
);
$type_diarrhees = array(
    array('id' => '1', 'value' => 'NiO7THddweV', 'code' => 'true'),
);
$type_vomissements = array(
    array('id' => '1', 'value' => 'eeJaYMmY4Or', 'code' => 'true'),
);
$profiles = array(
    array('id' => '1', 'value' => 'OIoHdmJDH3A', 'code' => 'AS'),
    array('id' => '2', 'value' => 'OIoHdmJDH3A', 'code' => 'AV'),
    array('id' => '3', 'value' => 'OIoHdmJDH3A', 'code' => 'AUTRE'),
);
$evenements = array(
    array(
        'code' => 'EVENEMENT1',
        'id' => '1',
        'displayName' => 'Mort d\'animaux ou volailles dans un village',
        'optionSet' => 'AGRI',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT3',
        'id' => '2',
        'displayName' => 'Mort d\'animaux après consommation d\'herbe ou d\'eau proche d\'un champ',
        'optionSet' => 'AGRI',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT4',
        'id' => '1',
        'displayName' => 'Mort massive d’animaux sauvages (y compris les oiseaux)',
        'optionSet' => 'ENV',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT5',
        'id' => '2',
        'displayName' => 'Maladies groupés chez les animaux sauvages (y compris les oiseaux)',
        'optionSet' => 'ENV',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT6',
        'id' => '3',
        'displayName' => 'Changement de comportements observé chez les animaux',
        'optionSet' => 'ENV',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT7',
        'id' => '4',
        'displayName' => 'Rumeurs à propos d\'évènements rares ou inexpliqués',
        'optionSet' => 'ENV',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT8',
        'id' => '5',
        'displayName' => 'Evénements inhabituels survenant dans l\'environnement : inondation, éboulement,feux etc.',
        'optionSet' => 'ENV',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT9',
        'id' => '1',
        'displayName' => 'Décès ou maladies inexpliqués de plusieurs personnes d’une même concession ou d’une même communauté',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT10',
        'id' => 'Qgn1GRdvDy0',
        'displayName' => ' Symptômes communs chez plusieurs personnes',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT11',
        'id' => '3',
        'displayName' => 'Conditions médicales atypiques',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT12',
        'id' => '4',
        'displayName' => 'Décès avec problème respiratoire',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT13',
        'id' => '5',
        'displayName' => ' Décès ou maladie après un voyage à l\'étranger',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT14',
        'id' => '6',
        'displayName' => 'Une ou plusieurs personnes avec fièvre,toux, ou mal de gorge',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT15',
        'id' => '7',
        'displayName' => 'Décès inexpliqué d\'un agent de santé ou d\'environnement',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT16',
        'id' => '8',
        'displayName' => 'Plusieurs décès inexpliqués en une semaine',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),

    array(
        'code' => 'EVENEMENT17',
        'id' => '9',
        'displayName' => 'Plusieurs personnes malades après funérailles mariages, baptêmes ou autres',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),
    array(
        'code' => 'EVENEMENT18',
        'id' => '10',
        'displayName' => 'Evènement inhabituel suite à une vaccination',
        'optionSet' => 'HUM',
        'value' => 'gfgGooXeXe7',
    ),

);

// $date_debut = $request->query('date_debut');
// $date_fin = $request->query('date_fin');
// $content = $request->query('content');
// $lang = $request->query('lang');

// end constants

function generateUid()
{
    global $username;
    global $password;

    $url = 'https://pev.hispwca.org/demo1/api/system/id.json?limit=1';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode($username . ':' . $password),
    ));

    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        $error = curl_error($curl);
        return $error;
    } else {
        return $response;
    }
    curl_close($curl);
}

function params($content)
{
    global $type_fievres;
    global $type_diarrhees;
    global $type_vomissements;
    global $profiles;
    global $evenements;
    global $langues;
    global $categories;
    global $telephone_dataelement;
    global $heure_dataelement;

    $response_uid = generateUid();
    $generateUid = json_decode($response_uid, true);
    $codes = $generateUid['codes'];
    $eventUid = $codes[0];

    if ($content != null && !empty($content)) {
        $dataString = $content;

        $content_array = explode('|', $dataString);
        $call_id = $content_array[0];
        $date_notification = $content_array[1];
        $heure = $content_array[2];
        $langue = $content_array[3];
        $profil = $content_array[4];
        $category = $content_array[5];
        $event_agriculture = $content_array[6];
        $event_environnement = $content_array[7];
        $event_humain = $content_array[8];
        $fievre = $content_array[9];
        $diarrhee = $content_array[10];
        $vomissement = $content_array[11];

        // langue
        $langValue = explode(':', $langue)[1];
        $filteredLangueArray = array_filter($langues, function ($langue) use ($langValue) {
            return $langue['id'] === $langValue;
        });

        if ($filteredLangueArray != null && !empty($filteredLangueArray)) {
            $filteredLangue = reset($filteredLangueArray);
            $code = $filteredLangue['code'];
            $langue_dataelement = $filteredLangue['value'];

            $langueDataValue = new stdClass();
            $langueDataValue->dataElement = $langue_dataelement;
            $langueDataValue->value = $code;
            if (!empty($code)) {
                $dataValues[] = $langueDataValue;
            }
        }

        $callIdDataValue = new stdClass();
        $callIdDataValue->dataElement = $telephone_dataelement;
        $callIdDataValue->value = explode(":", $call_id)[1];
        if (!empty(explode(":", $call_id)[1])) {
            $dataValues[] = $callIdDataValue;
        }

        $heureDataValue = new stdClass();
        $heureDataValue->dataElement = $heure_dataelement;
        $heureDataValue->value = str_replace('-', ':', explode(":", $heure)[1]);
        if (!empty(explode(":", $heure)[1])) {
            $dataValues[] = $heureDataValue;
        }

        $cat = explode(":", $category)[1];
        $filteredCategoriesArray = array_filter($categories, function ($category) use ($cat) {
            return $category['id'] === $cat;
        });
        $codeCategory = "";
        if ($filteredCategoriesArray != null && !empty($filteredCategoriesArray)) {
            $filteredCategory = reset($filteredCategoriesArray);
            $codeCategory = $filteredCategory['code'];
            $category_dataelement = $filteredCategory['value'];

            $categoryDataValue = new stdClass();
            $categoryDataValue->dataElement = $category_dataelement;
            $categoryDataValue->value = $codeCategory;
            if (!empty($codeCategory)) {
                $dataValues[] = $categoryDataValue;
            }
        }

        $selectedProfil = explode(":", $profil)[1];
        $filteredProfilesArray = array_filter($profiles, function ($one_profile) use ($selectedProfil) {
            return $one_profile['id'] === $selectedProfil;
        });

        if (!empty($filteredProfilesArray)) {
            $filteredProfil = reset($filteredProfilesArray);
            $code = $filteredProfil['code'];
            $profile_dataelement = $filteredProfil['value'];

            $profilDataValue = new stdClass();
            $profilDataValue->dataElement = $profile_dataelement;
            $profilDataValue->value = $code;
            if (!empty($code)) {
                $dataValues[] = $profilDataValue;
            }
        }

        $selectedEvent = "";
        if (!empty(explode(":", $event_agriculture)[1])) {
            $selectedEvent = explode(":", $event_agriculture)[1];
        }
        if (!empty(explode(":", $event_environnement)[1])) {
            $selectedEvent = explode(":", $event_environnement)[1];
        }
        if (!empty(explode(":", $event_humain)[1])) {
            $selectedEvent = explode(":", $event_humain)[1];
        }

        $filteredEventArray = array_filter($evenements, function ($one_event) use ($selectedEvent, $codeCategory) {
            return $one_event['id'] === $selectedEvent && $one_event['optionSet'] === $codeCategory;
        });

        if (!empty($filteredEventArray)) {
            $filteredEvent = reset($filteredEventArray);
            $codeEvent = $filteredEvent['code'];
            $event_dataelement = $filteredEvent['value'];

            $eventDataValue = new stdClass();
            $eventDataValue->dataElement = $event_dataelement;
            $eventDataValue->value = $codeEvent;
            if (!empty($codeEvent)) {
                $dataValues[] = $eventDataValue;
            }
        }

        $selectedDiarrhee = explode(":", $diarrhee)[1];
        $filteredDiarheeArray = array_filter($type_diarrhees, function ($one_diarrhee) use ($selectedDiarrhee) {
            return $one_diarrhee['id'] === $selectedDiarrhee;
        });

        if (!empty($filteredDiarheeArray)) {
            $filteredDiarrhee = reset($filteredDiarheeArray);
            $code = $filteredDiarrhee['code'];
            $diarrhee_dataelement = $filteredDiarrhee['value'];

            $diarrheeDataValue = new stdClass();
            $diarrheeDataValue->dataElement = $diarrhee_dataelement;
            $diarrheeDataValue->value = $code;
            if (!empty($code)) {
                $dataValues[] = $diarrheeDataValue;
            }
        }

        $selectedVomissement = explode(":", $diarrhee)[1];
        $filteredVomissementArray = array_filter($type_vomissements, function ($one_vomissement) use ($selectedVomissement) {
            return $one_vomissement['id'] === $selectedVomissement;
        });
        if (!empty($filteredVomissementArray)) {
            $filteredVomissement = reset($filteredVomissementArray);
            $code = $filteredVomissement['code'];
            $vomissement_dataelement = $filteredVomissement['value'];

            $vomissementDataValue = new stdClass();
            $vomissementDataValue->dataElement = $vomissement_dataelement;
            $vomissementDataValue->value = $code;
            if (!empty($code)) {
                $dataValues[] = $vomissementDataValue;
            }
        }

        $selectedFievre = explode(":", $fievre)[1];
        $filteredFievreArray = array_filter($type_fievres, function ($one_fievre) use ($selectedFievre) {
            return $one_fievre['id'] === $selectedFievre;
        });
        if (!empty($filteredFievreArray)) {
            $filteredFievre = reset($filteredFievreArray);
            $code = $filteredFievre['code'];
            $fievre_dataelement = $filteredFievre['value'];

            $FievreDataValue = new stdClass();
            $FievreDataValue->dataElement = $fievre_dataelement;
            $FievreDataValue->value = $code;
            if (!empty($code)) {
                $dataValues[] = $FievreDataValue;
            }
        }

        // create json object
        $eventObject = new stdClass();
        // $eventObject->eventDate = explode(":",$date_notification)[1];
        $eventObject->eventDate = (string) date("Y-m-d");
        $eventObject->program = 'SukFd2qu7OL';
        $eventObject->programStage = 'grRGNVAQWhy';
        $eventObject->orgUnit = 'ImspTQPwCqd';
        $eventObject->event = $eventUid;
        $eventObject->dataValues = $dataValues;

        $eventsObject = new stdClass();
        $eventsObject->events = array($eventObject);

        $events = json_encode($eventsObject);

        return $events;

    } else {
        return 'vous n\'avez pas renseigner la langue et le contenu';
    }
}

function sendToDhis2($events_params)
{
    global $username;
    global $password;

    if (!empty($events_params)) {
        // post data
        $urlPost = 'https://pev.hispwca.org/demo1/api/events.json';
        $curlPost = curl_init();
        curl_setopt($curlPost, CURLOPT_URL, $urlPost);
        curl_setopt($curlPost, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlPost, CURLOPT_POST, true);
        curl_setopt($curlPost, CURLOPT_POSTFIELDS, $events_params);
        curl_setopt($curlPost, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($username . ':' . $password),
        ));

        $responsePost = curl_exec($curlPost);

        if (curl_errno($curlPost)) {
            $error = curl_error($curlPost);
            return $error;
        } else {
            echo json_decode($responsePost, true)['message'];
            return json_decode($responsePost, true)['message'];
        }
        curl_close($curlPost);
    }
}

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     if (isset($_GET['content'])) {
//         $content = $_GET['content'];
//         $params_value = params($content);
//         sendToDhis2($params_value);

//     } else {
//         echo json_encode("Veuillez preciser le contenu");
//     }

// }

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($path !== '/api/conversations') {
    header("HTTP/1.1 403 Forbidden");
    exit("Accès interdit");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['content'])) {
        $content = $_GET['content'];
        $params_value = params($content);
        sendToDhis2($params_value);

    } else {
        echo json_encode("Veuillez preciser le contenu");
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    exit("Méthode non autorisée");
}
