from django.shortcuts import render
from .models import Link

# Create your views here.

def link(request):
  if request.user.is_authenticated:
    my_ls = FuelQuote.objects.filter(user=request.user)
    context = {'object_list': my_ls}
    return render(request, 'pages/links.html', context)
  else:
    return render(request, 'pages/links.html')

