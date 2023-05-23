<script setup>
</script>
<template>
  <v-layout>
    
    <v-navigation-drawer permanent>
      <v-list  class="text-center">
        <v-list-item>
      <v-img src="./../assets/logo-grupoa.png" alt="Grupo A" :width="100" class="mx-auto mb-8"></v-img>
    </v-list-item>
        <v-subheader class="font-weight-bold">Módulo Acadêmico</v-subheader>
        <v-list-item title="Alunos" class="cursor-pointer"></v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar title="Consulta de Alunos" class="bg-red"></v-app-bar>

    

    <v-main style="min-height: 300px;">
     
      <v-container>
      <v-form>
        <v-row>
          <v-col cols="8">
            <v-text-field label="Digite sua busca"></v-text-field>
          </v-col>
          <v-col cols="2">
            <v-btn size="large">Button</v-btn>
          </v-col>
        </v-row>
      </v-form>
    </v-container>
    </v-main>
  </v-layout>

</template>
