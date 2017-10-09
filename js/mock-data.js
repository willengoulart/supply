/* jshint esversion: 6 */

/**
 *  Define listas de dados simulados enquanto nenhum banco de dados é usado.
 */

// Lista de produtos gerais
const productList = [
  {
    id: 1,
    name: 'Lorem Ipsum (Veja)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 99.99,
    sale_price: false,
    qtd_parcelas: 4, // Esqueci a tradução disso ( ._.)
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 2,
    name: 'Lorem Ipsum (Neve)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 99.90,
    sale_price: 79.92,
    qtd_parcelas: 3,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 3,
    name: 'Lorem Ipsum (Ipê)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 229.90,
    sale_price: 183.92,
    qtd_parcelas: 9,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 4,
    name: 'Lorem Ipsum (Pinho Sol)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 219.90,
    sale_price: 159.92,
    qtd_parcelas: 7,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 5,
    name: 'Lorem Ipsum (Lorem Ipsum)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 95.92,
    sale_price: false,
    qtd_parcelas: 4,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 6,
    name: 'Lorem Ipsum (Void)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 99.90,
    sale_price: 79.92,
    qtd_parcelas: 3,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 7,
    name: 'Lorem Ipsum (Bom Bril)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 229.90,
    sale_price: 183.92,
    qtd_parcelas: 9,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  },
  {
    id: 8,
    name: 'Lorem Ipsum (SBT)',
    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    price: 219.90,
    sale_price: 159.92,
    qtd_parcelas: 7,
    img_url: 'http://via.placeholder.com/170x150?text=Produto',
    zoom_img_url: 'http://via.placeholder.com/900?text=Produto%20com%20zoom'
  }
];

// Lista as categorias de produtos
const categoriesList = [
  {
    id: 1,
    name: 'Limpa coisas'
  },
  {
    id: 2,
    name: 'Limpa mais coisas'
  },
  {
    id: 3,
    name: 'Produtos de limpeza'
  },
  {
    id: 4,
    name: 'Produtos de higiene'
  }
];

// Atribui categorias aleatórias para os produtos
productList.forEach(function(prod) {
  prod.category = categoriesList[ Math.floor( Math.random() * categoriesList.length ) ];
});


// Lista de estados do Brasil
const statesList = [
  {
    id:   1,
    name: 'Acre',
    abbr: 'AC'
  },
  {
    id:   2,
    name: 'Alagoas',
    abbr: 'AL'
  },
  {
    id:   3,
    name: 'Amazonas',
    abbr: 'AM'
  },
  {
    id:   4,
    name: 'Amapá',
    abbr: 'AP'
  },
  {
    id:   5,
    name: 'Bahia',
    abbr: 'BA'
  },
  {
    id:   6,
    name: 'Ceará',
    abbr: 'CE'
  },
  {
    id:   7,
    name: 'Distrito Federal',
    abbr: 'DF'
  },
  {
    id:   8,
    name: 'Espírito Santo',
    abbr: 'ES'
  },
  {
    id:   9,
    name: 'Goiás',
    abbr: 'GO'
  },
  {
    id:   10,
    name: 'Maranhão',
    abbr: 'MA'
  },
  {
    id:   11,
    name: 'Minas Gerais',
    abbr: 'MG'
  },
  {
    id:   12,
    name: 'Mato Grosso do Sul',
    abbr: 'MS'
  },
  {
    id:   13,
    name: 'Mato Grosso',
    abbr: 'MT'
  },
  {
    id:   14,
    name: 'Pará',
    abbr: 'PA'
  },
  {
    id:   15,
    name: 'Pernambuco',
    abbr: 'PE'
  },
  {
    id:   16,
    name: 'Piauí',
    abbr: 'PI'
  },
  {
    id:   17,
    name: 'Paraná',
    abbr: 'PR'
  },
  {
    id:   18,
    name: 'Rio de Janeiro',
    abbr: 'RJ'
  },
  {
    id:   19,
    name: 'Rio Grande do Norte',
    abbr: 'RN'
  },
  {
    id:   20,
    name: 'Rondônia',
    abbr: 'RO'
  },
  {
    id:   21,
    name: 'Roraima',
    abbr: 'RR'
  },
  {
    id:   22,
    name: 'Rio Grande do Sul',
    abbr: 'RS'
  },
  {
    id:   23,
    name: 'Santa Catarina',
    abbr: 'SC'
  },
  {
    id:   24,
    name: 'Sergipe',
    abbr: 'SE'
  },
  {
    id:   25,
    name: 'São Paulo',
    abbr: 'SP'
  },
  {
    id:   26,
    name: 'Tocantins',
    abbr: 'TO'
  }
];
