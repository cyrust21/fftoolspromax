(By Installing MAGIC TWEAK™, You Have Agreed To This)

echo ""
echo ""
echo "# UID  :MAGIC TWEAK"
sleep 1
echo "# VER  :20.03.91.3.4"
sleep 1
echo "# DEV  :BANGLEVV"
sleep 1
setprop dalvik.vm.usejit true
echo "skipped if you looking dalvik vm error"
echo ""
echo " Checking CONFIG For Games "
sleep 2
device_config get game_overlay com.dts.freefireth
echo " Create Config Files "
device_config put game_overlay com.dts.freefireth mode=2,downscaleFactor=0.7:mode=3,downscaleFactor=0.5
echo ""
sleep 1
cmd game mode performance com.dts.freefireth
echo " Enabled Performance mode for FreeFire Old "
echo ""
sleep 1
device_config put game_overlay com.dts.freefireth mode=2,fps=90:mode=3,fps=60
echo ""
sleep 1
cmd package compile -m speed -f com.dts.freefireth
sleep 1
