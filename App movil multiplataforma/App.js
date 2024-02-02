import React, { useState } from "react";
import {
  View,
  Text,
  TextInput,
  TouchableOpacity,
  StyleSheet,
  Alert,
  Image,
} from "react-native";

const LoginScreen = () => {
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");

  const handleLogin = () => {

    if (username === "usuario" && password === "contraseña") {
      Alert.alert("Inicio de sesión exitoso");
    } else {
      Alert.alert("Error en las credenciales");
    }
  };

  return (
    <View style={styles.container}>
      <Image
        style={styles.logoFlecha}
        source={require("./assets/flecha.png")}
      />

      <Text style={styles.title}>E-mail o usuario</Text>
      <Text style={styles.titlePequeno}>email o usuario</Text>

      <TextInput
        style={styles.input}
        onChangeText={(text) => setUsername(text)}
      />
      <TouchableOpacity style={styles.button} onPress={handleLogin}>
        <Text style={styles.buttonText}>Continuar</Text>
      </TouchableOpacity>
      <Text style={styles.titleCuentaText}>Crear cuenta</Text>
      <Text style={styles.titleCuentaText2}>Necesito aydua para ingresar</Text>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    padding: 16,
  },
  title: {
    fontSize: 24,
    marginBottom: 16,
    marginTop: 80,
  },
  titleCuentaText: {
    marginBottom: 16,
    color: "#3498db",
    paddingTop: 20,
  },
  titlePequeno: {
    paddingTop: 20,
    marginRight: 200,
  },
  titleCuentaText2: {
    marginBottom: 16,
    color: "#3498db",
    paddingTop: 50,
  },
  logoFlecha: {
    height: 30,
    width: 30,
    marginRight: 7,
    marginTop: 15,
    marginRight: 300,
  },
  input: {
    height: 60,
    width: "100%",
    borderColor: "gray",
    borderWidth: 1,
    marginBottom: 16,
    paddingHorizontal: 8,
  },
  button: {
    backgroundColor: "#3498db",
    paddingVertical: 10,
    padding: 10,
    borderRadius: 5,
    width: 330,
    marginTop: 50,
    height: 50,
  },
  buttonText: {
    color: "#fff",
    textAlign: "center",
    fontWeight: "bold",
    paddingTop: 5,
  },
});

export default LoginScreen;
