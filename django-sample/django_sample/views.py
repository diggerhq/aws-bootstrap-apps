from django.http import HttpResponse
from django.shortcuts import render

# Create your views here.
from django.template import loader


def index(request):
    template = loader.get_template('hello_world/index.html')
    context = {}
    return HttpResponse(template.render(context, request))