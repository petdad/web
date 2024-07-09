<?php
function getRandomLocation() {
    $locations = [
        'backyard', 'frontyard', 'room', 'study room', 'living',
        'garden', 'terrace', 'balcony', 'attic', 'basement',
        'kitchen', 'bathroom', 'bedroom', 'dining room', 'garage',
        'library', 'office', 'playroom', 'studio', 'workshop',
        'gym', 'pool', 'sauna', 'lounge', 'veranda',
        'den', 'cellar', 'hallway', 'laundry room', 'mudroom',
        'pantry', 'porch', 'sunroom', 'home theater', 'wine cellar',
        'conservatory', 'greenhouse', 'patio', 'deck', 'courtyard',
        'fountain', 'pond', 'orchard', 'vineyard', 'gazebo',
        'arboretum', 'waterfall', 'cabin', 'chapel', 'barn',
        'stable', 'shed', 'carriage house', 'tower', 'lighthouse',
        'cottage', 'villa', 'chateau', 'mansion', 'castle',
        'igloo', 'tent', 'yurt', 'treehouse', 'houseboat',
        'RV', 'apartment', 'condominium', 'townhouse', 'duplex',
        'farmhouse', 'ranch', 'bungalow', 'palace', 'pagoda',
        'mill', 'windmill', 'pagoda', 'turret', 'observatory',
        'warehouse', 'factory', 'refinery', 'hangar', 'bunker',
        'vault', 'crypt', 'mausoleum', 'tomb', 'sanctuary',
        'shrine', 'monastery', 'temple', 'mosque', 'synagogue',
        'church', 'cathedral', 'abbey', 'cemetery', 'memorial',
    ];
    $index = array_rand($locations);
    return $locations[$index];
}

function getRandomAnimal() {
    $animals = [
        'cat', 'dog', 'rabbit', 'hamster', 'parrot',
        'goldfish', 'turtle', 'snake', 'lizard', 'guinea pig',
        'chinchilla', 'ferret', 'gerbil', 'canary', 'cockatiel',
        'budgerigar', 'horse', 'pony', 'donkey', 'goat',
        'sheep', 'pig', 'cow', 'chicken', 'duck',
        'goose', 'turkey', 'pigeon', 'peacock', 'emu',
        'ostrich', 'kangaroo', 'koala', 'wombat', 'dingo',
        'wallaby', 'tasmanian devil', 'platypus', 'echidna', 'crocodile',
        'alligator', 'hippopotamus', 'elephant', 'giraffe', 'zebra',
        'lion', 'tiger', 'leopard', 'cheetah', 'jaguar',
        'puma', 'lynx', 'bobcat', 'panther', 'cougar',
        'wolf', 'fox', 'bear', 'polar bear', 'grizzly bear',
        'panda', 'red panda', 'koala', 'sloth', 'anteater',
        'armadillo', 'meerkat', 'mongoose', 'gorilla', 'chimpanzee',
        'orangutan', 'baboon', 'macaque', 'gibbon', 'lemur',
        'hyena', 'jackal', 'aardvark', 'tapir', 'rhinoceros',
        'hippopotamus', 'warthog', 'badger', 'skunk', 'otter',
    ];

    $index = array_rand($animals);
    return $animals[$index];
}


function getRandomMiniComponent() {

    $components= [
        'motion sensor', 'temperature sensor', 'humidity sensor', 'light sensor', 'proximity sensor',
        'GPS tracker', 'pet feeder', 'automatic pet waterer', 'pet camera', 'pet activity tracker',
        'pet GPS collar', 'pet grooming brush', 'pet nail trimmer', 'automatic litter box', 'pet calming bed',
        'pet toy dispenser', 'automatic pet door', 'pet training clicker', 'pet treat dispenser', 'pet health monitor',
        'smart pet tag', 'pet fountain', 'automatic fish feeder', 'aquarium water tester', 'plant sensor',
    ];
    $index = array_rand($components);
    return $components[$index];
}
