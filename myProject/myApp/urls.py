from . import views
from django.urls import path

urlpatterns = [
path("",views.home, name="home"),
    path('view/', views.view_obituaries, name='view_obituaries'),
]