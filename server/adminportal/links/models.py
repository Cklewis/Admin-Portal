from django.db import models
from django.conf import settings
from django.contrib.auth import get_user_model
from users.models import CustomUser

# Create your models here.
User = settings.AUTH_USER_MODEL

class Link(models.Model):
    link_address = models.URLField(blank=False)
    link_category = models.CharField(max_length=200)
    user = models.ForeignKey(CustomUser, on_delete=models.CASCADE)
    
