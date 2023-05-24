INSERT INTO
    categories (name)
VALUES
    ('Procesadores'),
    ('Tarjetas Madre'),
    ('Memoria RAM'),
    ('Tarjeta Grafica'),
    ('Almacenamiento'),
    ('Fuente de Poder'),
    ('Refrigeración Liquida'),
    ('Ventiladores');

INSERT INTO
    products (
        name,
        price,
        stock,
        description,
        image_url,
        category_id
    )
VALUES
    (
        'Procesador Intel Core i7',
        3899.99,
        10,
        'Procesador de última generación',
        'i7.png',
        1
    ),
    (
        'Tarjeta Madre ASUS ROG Strix',
        3199.99,
        5,
        'Tarjeta madre para entusiastas de los juegos',
        'rog.png',
        2
    ),
    (
        'Memoria RAM Corsair Vengeance',
        379.99,
        20,
        'Memoria RAM de alto rendimiento',
        'corsair.png',
        3
    ),
    (
        'Tarjeta Gráfica NVIDIA GeForce RTX 3080',
        15299.99,
        3,
        'Tarjeta gráfica de gama alta para juegos',
        'rtx.png',
        4
    ),
    (
        'Disco Duro SSD Samsung 1TB',
        1409.99,
        15,
        'Almacenamiento rápido y confiable',
        'ssd.png',
        5
    ),
    (
        'Fuente de Poder ',
        12999.99,
        10,
        'Fuente de poder de 1200w con certificación 80 Plus de alta gama',
        'fuente.png',
        6
    ),
    (
        'Refrigeración Liquida Cooler Master ml360',
        1962.99,
        8,
        'Disipador de calor por refrigeración liquida master liquid ',
        'master_liquid.png',
        7
    );

INSERT INTO
    users (name, email, password, address)
VALUES
    (
        'Juan Pérez',
        'juan@example.com',
        '$2y$10$iXQQlSRFifmSPd46ZxeRfOyYYOwBtpA/FqStKz.e8CpYsXJaEVv0.',
        'Calle Principal 123'
    ),
    (
        'María García',
        'maria@example.com',
        '$2y$10$iXQQlSRFifmSPd46ZxeRfOyYYOwBtpA/FqStKz.e8CpYsXJaEVv0.',
        'Avenida Central 456'
    ),
    (
        'Luis Fernández',
        'luis@example.com',
        '$2y$10$iXQQlSRFifmSPd46ZxeRfOyYYOwBtpA/FqStKz.e8CpYsXJaEVv0.',
        'Calle Secundaria 789'
    ),
    (
        'Ana Rodríguez',
        'ana@example.com',
        '$2y$10$iXQQlSRFifmSPd46ZxeRfOyYYOwBtpA/FqStKz.e8CpYsXJaEVv0.',
        'Avenida Principal 987'
    ),
    (
        'Carlos Martínez',
        'carlos@example.com',
        '$2y$10$iXQQlSRFifmSPd46ZxeRfOyYYOwBtpA/FqStKz.e8CpYsXJaEVv0.',
        'Calle Secundaria 654'
    );

INSERT INTO
    cart (user_id, product_id, quantity)
VALUES
    (1, 1, 2),
    (1, 3, 1),
    (2, 4, 3),
    (3, 2, 2),
    (4, 5, 1);