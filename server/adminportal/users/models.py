from django.contrib.auth.models import AbstractUser
from django.db import models
#Create your models here.

class CustomUser(AbstractUser):
    full_name = models.CharField(max_length=50, blank=False)
    admin_type = models.CharField(max_length=100, blank=False)
    