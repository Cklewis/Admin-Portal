from django.contrib import admin
from .models import CustomUser

# Register your models here.

class CustomUserAdmin(admin.ModelAdmin):
  list_display = ('username', 'full_name', 'email', 'admin_type')
  list_display_links = ('username', 'full_name', 'admin_type')
  list_filter = ('full_name','admin_type')

admin.site.register(CustomUser, CustomUserAdmin)