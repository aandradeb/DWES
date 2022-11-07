from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from webserviceapp.models import Tjuegos


# Create your views here.
def pagina_de_prueba(request):
    return HttpResponse("<h1>Hola caracola</h1>")


def devolver_juegos(request):
    juegos = Tjuegos.objects.all()
    respuesta_final = []

    for fila_sql in juegos:
        diccionario = {}
        diccionario['id'] = fila_sql.id
        diccionario['nombre'] = fila_sql.nombre
        diccionario['desarrolladora'] = fila_sql.desarrolladora
        diccionario['fecha_lanzamiento'] = fila_sql.fecha_lanzamiento
        diccionario['url_imagen'] = fila_sql.url_imagen
        respuesta_final.append(diccionario)

    return JsonResponse(respuesta_final, safe=False)


def devolver_juego_por_id(request, id_solicitado):
    juego = Tjuegos.objects.get(id=id_solicitado)
    comentarios = juego.tcomentarios_set.all()
    lista_comentarios = []

    for fila_comentarios_sql in comentarios:
        diccionario = {}
        diccionario['id'] = fila_comentarios_sql.id
        diccionario['comentario'] = fila_comentarios_sql.comentario
        diccionario['fecha'] = fila_comentarios_sql.fecha
        lista_comentarios.append(diccionario)

    resultado = {
        'id': juego.id,
        'nombre': juego.nombre,
        'fecha_lanzamiento': juego.fecha_lanzamiento,
        'comentarios': lista_comentarios
    }

    return JsonResponse(resultado, json_dumps_params={'ensure_ascii':False})


def crear_comentario_juego(request, id_solicitado):
    pass
