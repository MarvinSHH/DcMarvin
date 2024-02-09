import { StyleSheet } from "react-native";

export const estilos = StyleSheet.create({
  //Estilos del boton
  boton: {
    backgroundColor: "#227edb",
    padding: 5,
    borderRadius: 10,
    borderColor: "#FFFFFF",
    borderWidth: 2,
    paddingRight: 33,
    //margin:3,
    alignItems: "center",
    flexDirection: "row",
    justifyContent: "center",
  },
  textoB: {
    color: "white",
    fontSize: 20,
    alignContent: "center",
  },
  logoB: {
    height: 35,
    width: 35,
    marginRight: 7,
  },
  //Estilos de la caja
  boxContainer: {
    borderColor: "#FFFFFF",
    borderWidth: 2,
    marginTop: 75,
    borderRadius: 10,
    height: 100,
    margin: 15,
    marginBottom: 50,
    alignItems: "flex-end",
    justifyContent: "center",
    paddingBottom: 15,
    backgroundColor: "#FFFF",
  },
  TextBox: {
    fontSize: 50,
    color: "#000",
    padding: 10,
  },
  //estilo de contenedor de los botones
  botonescontainer: {
    margin: 15,
    flexDirection: "row",
    flexWrap: "wrap",
  },
});
