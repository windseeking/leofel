USE leofel;

INSERT INTO `machines` (title, description, image_path_1, image_path_2, image_path_3, image_path_4, image_path_5,
                        passport_url, conditions_url, manual_url, name, model, number, production_date, durability,
                        manufacturer, address, diameter, spills_number, spills_rotation, lead_speed,
                        spills_driver_power, lead_driver_power, source_power, frequency, engine_type, total_capacity,
                        length, width, height, accuracy_deflection, accuracy_form, surface_undulation,
                        undulation_finish, undulation_superfinish, sef_url)
VALUES ('Станок полировально-доводочный «ПСП-2Ш»',
        'Предназначен для тонкого шлифования и полирования сферических (выпуклых, вогнутых) и плоских поверхностей
        одиночных заготовок или блоков заготовок оптических деталей диаметром от 30 до 250 мм.',
        '../img/placeholder.jpg',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'Станок полировально-доводочный',
        'ПСП-2Ш',
        '007',
        '2018 год',
        '15 лет',
        'Общество с ограниченной ответственностью «РУССО-БАЛТ ПЛЮС»',
        'РФ, 198320, С-Петербург, ул. Свободы, д.50',
        '30 – 250',
        '2',
        '2 – 110',
        '2 – 110',
        '1.1',
        '1.1',
        '220',
        '50',
        'асинхронные',
        '4.4',
        '1364',
        '1163',
        '1780',
        '0.2',
        '0.15',
        'Ra 0.63',
        'Ra 0.05',
        'RMS до 1Å',
        'stanok-psp-2sh');

INSERT INTO materials (name, description, image_path_1, image_path_2, image_path_3, image_path_4, image_path_5, matter,
                       grain, packing, price, sef_url)
VALUES ('Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Lorem ipsum dolor sit amet. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur.',
        '../img/placeholder.jpg',
        '',
        '',
        '',
        '',
        'электрокорунд',
        'М5(F1000)',
        '20 кг',
        '1234',
        '');