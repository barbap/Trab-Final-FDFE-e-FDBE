const treinos = [
  {
    id: "xJ2t-MlGF-k",
    Poster: "https://i.ytimg.com/vi/xJ2t-MlGF-k/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAI5uZvi7d1FvHEf69d19bqro96fw",
    Title: "Juju"
  },
  {
    id: "7_D0txiDM_o",
    Poster: "https://i.ytimg.com/vi/7_D0txiDM_o/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA41i8WedsdY7-cd5DOdfLT3rB8HA",
    Title: "Marcelli"
  },
  {
    id: "h9pgLRKiIJw",
    Poster: "https://i.ytimg.com/vi/h9pgLRKiIJw/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBamb1yb7tD--LEMR76BRMbQUA6-w",
    Title: "Raíssa"
  },
  {
    id: "Ub3O7mF2r9s",
    Poster: "https://i.ytimg.com/vi/Ub3O7mF2r9s/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDniXacJn5S_HJd1uT-wp8YeXZPkw",
    Title: "Kelly"
  },
  {
    id: "zxoZvpA8Azk",
    Poster: "https://i.ytimg.com/vi/zxoZvpA8Azk/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLANvgQsbff67AfaYAZz2SaK9mANLA",
    Title: "Vivi"
  },
  {
    id: "wwUfEsynaqU",
    Poster: "https://i.ytimg.com/vi/wwUfEsynaqU/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAv9i63PiehLvROrsa9RoaLAeKE4A",
    Title: "Trapézio Descendente"
  }
];

export const Treinos = id => {
  if(id) {
    return treinos.find(treino => treino.id === id);
  }
  return treinos;
};
