<?php

$postos_default_horarios = "dias úteis das 8h30 às 17h";

$postos = array(
    'Rodoferroviária'                   => array('Av. Presidente Affonso Camargo, 330', -25.437040, -49.256569, $postos_default_horarios),
    'Rua da Cidadania Boa Vista'        => array('Av. Paraná, 3600 - Próx. Posto de Saúde 24h - Boa Vista', -25.385353, -49.232734, $postos_default_horarios),
    'Rua da Cidadania Boqueirão'        => array('Terminal do Carmo', -25.500989, -49.236959, $postos_default_horarios),
    'Rua da Cidadania Pinheirinho'      => array('Terminal do Pinheirinho', -25.513913, -49.295273, $postos_default_horarios),
    'Rua da Cidadania Portão'           => array('Terminal do Fazendinha', -25.477915, -49.327196, $postos_default_horarios),
    'Rua da Cidadania Santa Felicidade' => array('Terminal Santa Felicidade', -25.400827, -49.330032, $postos_default_horarios),
    'Rua da Cidadania Matriz'           => array('Praça Rui Barbosa', -25.435135, -49.272574, $postos_default_horarios),
    'Posto Avançado Tatuquara'          => array('Rua Pero Vaz de Caminha, 560 – Tatuquara', -25.564596, -49.338420, 'dias úteis das 9h às 12h e das 13h às 17h'),
);

$vendas = array(
    'Travessa Moreira Garcez'           => array('Em frente à galeria Tobias de Macedo', -25.428872, -49.270421),
    '13 de Maio'                        => array('Na esquina das ruas Barão do Cerro Azul e 13 de Maio', -25.426942, -49.270775),
    'Arcadas do Pelourinho'             => array('Na praça Generoso Marques, em frente a Loja Riachuelo', -25.429892, -49.270780),
    'Banca Bom Jesus'                   => array('Na Praça Rui Barbosa, perto da Rua 24 de Maio', -25.436688, -49.274118),
    'Banca Bom Jesus II'                => array('Na Praça Rui Barbosa, perto da Voluntários da Pátria', -25.434816, -49.272799),
    'Banca Revistaria Cultura'          => array('Na Praça Rui Barbosa, perto da Desembargador Westphalen', -25.434884, -49.272185),
    'Banca da Cátia'                    => array('Na Praça Rui Barbosa, em frente ao Colégio São José', -25.435879, -49.274217),
    'Banca do Cyro'                     => array('Na Praça Tiradentes', -25.430059, -49.271103),
    'Banca Carlos Gomes'                => array('Na Praça Carlos Gomes', -25.432961, -49.270134),
    'Banca Staub'                       => array('Na Avenida Marechal Deodoro, esquina com João Negrão', -25.430353, -49.266841),
    'Banca de café - Café Zacarias'     => array('Na Praça Zacarias', -25.432632, -49.272945),
    'Banca Passeio'                     => array('Na Praça 19 de Dezembro', -25.424687, -49.269595),
    'Banca em frente ao Itaú'           => array('No Centro Cívico, perto da Prefeitura', -25.418012, -49.268721),
    'Banca Candido do Abreu'            => array('No Centro Cívico, perto da Comendador Fontana', -25.418833, -49.268575),
    'Lanchonete Haluche'                => array('Terminal Cabral', -25.406598, -49.252688),
    'Lanches Veneto'                    => array('Terminal Santa Felicidade', -25.400604, -49.330547),
    'Tívoli Comércio de Jornais'        => array('Terminal Campina do Siqueira', -25.435908, -49.306869),
    'Vital & Araújo'                    => array('Terminal Vila Hauer', -25.481281, -49.247183),
    'Revistaria Portão'                 => array('Terminal Portão', -25.475975, -49.292895),
    'Tailândia Doces e Salgados'        => array('Terminal Centenário', -25.468831, -49.207789),
    'Lanchonete do Terminal Fazendinha' => array('Terminal Fazendinha', -25.477286, -49.327147),
    'Banca e Revistaria Santa Júlia'    => array('Terminal Campo Comprido', -25.441483, -49.346671),
    'Kerida Present\'s'                 => array('Na Rua da Cidadania Boa Vista', -25.385293, -49.232684),
    'Estação tubo Santa Quitéria'       => array('Av. Pres. Arthur Bernardes - Santa Quitéria', -25.459171, -49.302421),
);

$linhas = array(
    'A Munhoz/Botânico', 'Ahú/Los Ângeles', 'Alferes Poli', 'Augusta', 'Augusto Stresser', 'Bigorrilho', 'Butiatuvinha', 'Canal Belém/Salgado Filho',
    'Canal da Música/Vista Alegre', 'Cajuru', 'Cassiopéia', 'Circular Centro', 'Cristo Rei', 'Dom Ático', 'Estribo Ahú', 'Estudante', 'Fernando de Noronha',
    'Formosa', 'Fredolin Wolf', 'Guabirotuba', 'Interhospitais', 'Itupava/Hospital Militar', 'Jardim Arroio', 'Jardim Esplanada', 'Jardim Social/Batel',
    'José Culpi', 'Julio Graff', 'Laranjeiras', 'Lindóia', 'Marechal Hermes/Santa Efigênia', 'Mateus Leme', 'Mercúrio', 'Mossunguê', 'Nilo Peçanha',
    'Nossa Senhora de Nazaré', 'Novo Mundo', 'Ouro Verde/ Vila Bádia', 'Paineiras', 'Palotinos', 'Passaúna', 'Pinheirinho/CIC', 'Portão',
    'Portão/Santa Bernadethe (Linha Verde)', 'Quartel General', 'São Benedito', 'São Bernardo', 'São João', 'São Jorge', 'Santa Amélia', 'Santa Bárbara',
    'Santa Gema', 'Santa Quitéria', 'Solar', 'Tingui', 'Tramontina', 'Universidades', 'Vila Izabel', 'Vila Macedo', 'Vila Marqueto', 'Vila Rosinha',
    'Vila Suíça', 'Veneza', 'Vila Velha/Buriti',
);
