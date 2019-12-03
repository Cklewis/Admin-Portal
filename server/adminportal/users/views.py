from django.urls import reverse_lazy
from django.views.generic import CreateView
from django.shortcuts import render, redirect
from .models import CustomUser

from .forms import CustomUserCreationForm

#Create your views here.

class Register(CreateView):
    form_class = CustomUserCreationForm
    success_url = reverse_lazy('login')
    template_name = "pages/register.html"

'''
def userProfile(request):
    context = {
        "user": request.user
    }
    return render(request, 'pages/profile.html', context)
'''
